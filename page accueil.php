<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service de Commutation & Réseau LAN Sans Fil</title>
    <link rel="stylesheet" href="page.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- En-tête -->
    <header>
        <div class="header-title">
            <h1>LES COURS SONOU PARAKOU SIL2 IIM2</h1>
        </div>
        <div class="navbar">
            <div class="logo">LAN Services</div>
            <nav>
                <ul>
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#services">Services</a>
                        <ul>
                            <li><a href="#commutation">Commutation Réseau</a></li>
                            <li><a href="#lan">Réseaux LAN Sans Fil</a></li>
                        </ul>
                    </li>
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#downloads">Téléchargements</a></li>
                    <li><a href="#members">Membres</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="nav-icons">
                <a href="#search" class="icon search-icon"><i class="fa fa-search"></i></a>
                <a href="#login" class="icon login-icon">Connexion</a>
            </div>
        </div>
    </header>

    <!-- Section Accueil -->
    <section id="home">
        <div class="hero">
            <h1>Solutions de Commutation & Réseau LAN Sans Fil</h1>
            <p>Optimisez vos réseaux locaux sans fil avec nos technologies avancées et nos solutions de gestion de commutation.</p>
            <a href="#services" class="btn">Découvrir nos services</a>
        </div>
    </section>
<!-- Section Authentification -->
<section id="auth" class="auth-section">
    <div class="container">
        <h2>Authentification</h2>
        <form action="authenticate&.php" method="post">
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
   

</section>

    <!-- Section Services -->
    <section id="services">
        <div class="container">
            <h2>Nos Services</h2>
            <div class="service-grid">
                <div class="service" id="commutation">
                    <h3>Commutation Réseau</h3>
                    <p>Des solutions pour optimiser vos commutateurs réseau avec des performances inégalées pour votre infrastructure.</p>
                </div>
                <div class="service" id="lan">
                    <h3>Réseaux LAN Sans Fil</h3>
                    <p>Mise en place de réseaux LAN sans fil fiables, flexibles et sécurisés pour vos besoins professionnels.</p>
                </div>
                <div class="service">
                    <h3>Gestion de Bande Passante</h3>
                    <p>Outils avancés pour la gestion efficace de la bande passante et la priorisation des flux réseau critiques.</p>
                </div>
            </div>
        </div>

    </section>
    <!-- Section Images -->
<section id="gallery">
    <h2>Galerie d'Images</h2>
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="images (3).jpeg" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="images.jpeg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="téléchargement.jpeg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="images (2).jpeg" alt="Image 4">
        </div>
    </div>
</section>


   <!-- Section Solutions -->
<section id="solutions">
    <div class="container">
        <h2>Solutions Avancées</h2>
        <p>Nos solutions combinent la commutation intelligente et la technologie LAN sans fil pour vous offrir une connectivité sans faille, une gestion réseau simplifiée et une sécurité renforcée.</p>
        <div class="solution-grid">
            <div class="solution-card">
                <div class="solution-icon"><i class="fa fa-sitemap"></i></div>
                <h3>Gestion de VLAN</h3>
                <p>Optimisez votre réseau en créant des VLANs pour segmenter le trafic et améliorer la sécurité.</p>
            </div>
            <div class="solution-card">
                <div class="solution-icon"><i class="fa fa-random"></i></div>
                <h3>Routage Dynamique</h3>
                <p>Implémentez des protocoles de routage dynamique pour assurer une connexion stable et rapide.</p>
            </div>
            <div class="solution-card">
                <div class="solution-icon"><i class="fa fa-lock"></i></div>
                <h3>Sécurité Réseau</h3>
                <p>Protégez vos données avec des solutions de sécurité avancées intégrées directement dans le réseau.</p>
            </div>
            <div class="solution-card">
                <div class="solution-icon"><i class="fa fa-chart-line"></i></div>
                <h3>Surveillance en Temps Réel</h3>
                <p>Gardez un œil sur vos performances réseau avec des outils d'analyse et de reporting en temps réel.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Section Téléchargements -->
<section id="downloads">
    <div class="container">
        <h2>Déposez vos fichiers ici</h2>
        <div id="drop-area">
            <p>Faites glisser vos fichiers ici ou cliquez pour sélectionner</p>
            <input type="file" id="fileElem" multiple accept="application/pdf, .doc, .docx, .ppt, .pptx, .xls, .xlsx" onchange="handleFiles(this.files)">
            <label for="fileElem">Sélectionner des fichiers</label>
            <div id="file-list"></div>
        </div>
    </div>
</section>

    <!-- Section Membres -->
    <section id="members">
        <div class="container">
            <h2>Espace Membre</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Filière</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GANDONOU</td>
                        <td>Rosario</td>
                        <td>SIL2</td>
                        <td>56 16 34 33</td>
                    </tr>
                    <tr>
                        <td>GOI</td>
                        <td>Armelle</td>
                        <td>SIL2</td>
                        <td>61045061</td>
                    </tr>
                    <tr>
                        <td>KOLE</td>
                        <td>Melvine</td>
                        <td>IIM2</td>
                        <td>51 33 10 26</td>
                    </tr>
                    <tr>
                        <td>SAMBIENI</td>
                        <td>Clémentine</td>
                        <td>SIL2</td>
                        <td>96 64 54 06</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section Nos Constats -->
<section id="constats">
    <div class="container">
        <h2>Nos Constats</h2>
        <p>Voici les constats clés que nous avons observés dans le domaine des réseaux LAN sans fil :</p>
        <div class="constat-grid">
            <div class="constat-card">
                <div class="constat-icon"><i class="fa fa-check-circle"></i></div>
                <h3>Fiabilité</h3>
                <p>La fiabilité des réseaux LAN sans fil dépend fortement de la qualité des équipements utilisés.</p>
            </div>
            <div class="constat-card">
                <div class="constat-icon"><i class="fa fa-shield-alt"></i></div>
                <h3>Sécurité</h3>
                <p>Les réseaux sans fil nécessitent des mesures de sécurité robustes pour prévenir les intrusions.</p>
            </div>
            <div class="constat-card">
                <div class="constat-icon"><i class="fa fa-tachometer-alt"></i></div>
                <h3>Performance</h3>
                <p>La performance du réseau est influencée par la gestion de la bande passante et les interférences.</p>
            </div>
            <div class="constat-card">
                <div class="constat-icon"><i class="fa fa-users"></i></div>
                <h3>Scalabilité</h3>
                <p>Les solutions LAN doivent être scalables pour s'adapter à la croissance des entreprises.</p>
            </div>
        </div>
    </div>
</section>


   <!-- Pied de page -->
<footer>
    <div class="footer-container">
        <div class="footer-info">
            <h3>Contact</h3>
            <p>Email: <a href="mailto:contact@lanservices.com">contact@lanservices.com</a></p>
            <p>Téléphone: +229 56 16 34 33</p>
        </div>
        <div class="footer-links">
            <h3>Liens Utiles</h3>
            <ul>
                <li><a href="#home">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#solutions">Solutions</a></li>
                <li><a href="#constats">Nos Constats</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h3>Suivez-nous</h3>
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 LAN Services - Tous droits réservés.</p>
    </div>
</footer>


    <script>
        document.getElementById('uploadButton').addEventListener('click', function() {
            const fileInput = document.getElementById('fileUpload');
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = '';
            for (let i = 0; i < fileInput.files.length; i++) {
                const file = fileInput.files[i];
                const listItem = document.createElement('div');
                listItem.textContent = file.name;
                fileList.appendChild(listItem);
            }
        });
    </script>
</body>
</html>
