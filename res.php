
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $mask = $_POST['mask'];
            $machines = $_POST['machines'];

                // Obtenir la classe d'appartenance de l'adresse IP
                $class = getClass($mask);

                // Calculer les adresses réseau et de diffusion
                list($networkAddress, $broadcastAddress, $usableIPs) = calculateNetworkDetails($ip, $mask);

                // Afficher les résultats
                echo "<h2>Résultats :</h2>";
                echo "<p>Classe d'appartenance : <strong>$class</strong></p>";
                echo "<p>Adresse du réseau : <strong>$networkAddress</strong></p>";
                echo "<p>Adresse de diffusion : <strong>$broadcastAddress</strong></p>";
                echo "<p>Nombre d'adresses IP utilisables : <strong>$usableIPs</strong></p>";
            }
        }

        function getClass($mask) {
            $firstOctet = (int) explode('.', $mask)[0];
            if ($firstOctet < 128) {
                return 'A';
            } elseif ($firstOctet < 192) {
                return 'B';
            } elseif ($firstOctet < 224) {
                return 'C';
            } elseif ($firstOctet < 240) {
                return 'D';
            } else {
                return 'E';
            }
        }

        function calculateNetworkDetails($ip, $mask) {
            $ipParts = explode('.', $ip);
            $maskParts = explode('.', $mask);

            // Calculer l'adresse du réseau
            $networkAddress = [];
            for ($i = 0; $i < 4; $i++) {
                $networkAddress[] = $ipParts[$i] & $maskParts[$i];
            }
            $networkAddress = implode('.', $networkAddress);

            // Calculer l'adresse de diffusion
            $broadcastAddress = [];
            for ($i = 0; $i < 4; $i++) {
                $broadcastAddress[] = $ipParts[$i] | (~$maskParts[$i] & 255);
            }
            $broadcastAddress = implode('.', $broadcastAddress);

            // Calculer le nombre d'adresses IP utilisables
            $usableIPs = (1 << (32 - ip2long($mask))) - 2; // 2 pour réseau et diffusion
            return [$networkAddress, $broadcastAddress, $usableIPs];
        }
        ?>
