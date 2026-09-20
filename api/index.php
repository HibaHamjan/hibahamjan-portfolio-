<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio | Développeuse Full Stack</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        /* ================= GENERAL ================= */

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: bold;
            color: #6c63ff !important;
        }

        .nav-link {
            font-weight: 500;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #6c63ff;
        }

        /* ================= HERO ================= */

        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f8f9fa, #eeeaff);
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .hero h1 span {
            color: #6c63ff;
        }

        .hero p {
            font-size: 1.15rem;
            color: #666;
            line-height: 1.8;
        }

        .btn-main {
            background-color: #6c63ff;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-main:hover {
            background-color: #554de0;
            color: white;
        }

        .btn-outline-main {
            border: 2px solid #6c63ff;
            color: #6c63ff;
            padding: 10px 25px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            margin-left: 10px;
        }

        .btn-outline-main:hover {
            background-color: #6c63ff;
            color: white;
        }

        /* ================= PROFILE IMAGE ================= */

        .profile-img {
            width: 320px;
            height: 320px;
            object-fit: cover;
            border-radius: 50%;
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        /* ================= SECTIONS ================= */

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-weight: bold;
        }

        .section-title span {
            color: #6c63ff;
        }

        /* ================= ABOUT ================= */

        .about-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
        }

        /* ================= MODULES ================= */

        .module-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            transition: 0.3s;
            border-left: 4px solid #6c63ff;
            height: 100%;
        }

        .module-card:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 25px rgba(108,99,255,0.18);
        }

        #lien {
            display: flex;
            align-items: center;
            padding: 20px 25px;
            gap: 20px;
            text-decoration: none;
            color: inherit;
            min-height: 100px;
        }

        .module-icon {
            width: 55px;
            height: 55px;
            min-width: 55px;
            border-radius: 12px;
            background-color: #eeeaff;
            color: #6c63ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .module-info h5 {
            margin: 0 0 5px;
            font-weight: bold;
            color: #212529;
        }

        .module-info p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        /* ================= SKILLS ================= */

        .skill-card {
            background: white;
            padding: 25px;
            text-align: center;
            border-radius: 15px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-8px);
        }

        .skill-card i {
            font-size: 40px;
            color: #6c63ff;
            margin-bottom: 15px;
        }

        /* ================= PROJECTS ================= */

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: 100%;
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-8px);
        }

        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project-content {
            padding: 25px;
        }

        .badge-tech {
            background-color: #eeeaff;
            color: #6c63ff;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 13px;
            margin-right: 5px;
            display: inline-block;
            margin-top: 5px;
        }

        /* ================= CONTACT ================= */

        .contact-box {
            background: #6c63ff;
            color: white;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
        }

        .contact-box a {
            color: white;
            text-decoration: none;
        }

        /* ================= FOOTER ================= */

        footer {
            background-color: #212529;
            color: white;
            padding: 25px;
            text-align: center;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 768px) {
            .hero {
                text-align: center;
                padding: 50px 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .profile-img {
                width: 230px;
                height: 230px;
                margin-top: 40px;
            }

            .btn-outline-main {
                margin-left: 0;
            }
        }

    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#accueil">
            <i class="fa-solid fa-code"></i> Hiba
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#accueil">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#modules">Modules</a></li>
                <li class="nav-item"><a class="nav-link" href="#competences">Compétences</a></li>
                <li class="nav-item"><a class="nav-link" href="#projets">Projets</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ================= HERO ================= -->
<section class="hero" id="accueil">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="text-primary fw-bold">Bonjour, je suis</p>
                <h1>Hiba <span>Hamjan</span></h1>
                <h3 class="mt-3">Stagiaire en Développement Full Stack</h3>
                <p class="mt-3">
                    Je suis actuellement en deuxième année de formation en développement digital. Passionnée par la création d'applications web modernes, je développe mes compétences en Front-End et Back-End.
                </p>
                <a href="#projets" class="btn-main">
                    <i class="fa-solid fa-folder-open"></i> Voir mes projets
                </a>
                <a href="#contact" class="btn-outline-main">Me contacter</a>
            </div>
            <div class="col-lg-5 text-center">
                <!-- Chemin vers l'image dans public/images/ -->
                <img src="/public/images/me.jpeg" alt="Photo de profil" class="profile-img">
            </div>
        </div>
    </div>
</section>

<!-- ================= À PROPOS ================= -->
<section id="apropos">
    <div class="container">
        <div class="section-title">
            <h2>À <span>propos de moi</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="about-card">
                    <h4 class="mb-3">👩‍💻 Qui suis-je ?</h4>
                    <p>Je suis une stagiaire en deuxième année de développement digital, spécialisée dans le développement Full Stack.</p>
                    <p>Ma formation m'a permis d'acquérir des connaissances en développement Front-End, Back-End, bases de données et conception d'applications web.</p>
                    <p class="mb-0">Je suis actuellement à la recherche d'une opportunité de stage qui me permettra de mettre en pratique mes connaissances, d'apprendre de nouvelles technologies et de participer à des projets professionnels.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= MODULES ================= -->
<section id="modules" class="bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Mes <span>modules</span></h2>
            <p>Les principaux domaines étudiés durant ma formation</p>
        </div>

        <div class="row g-4">
            <!-- MODULE 1 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m201.php" id="lien">
                        <div class="module-icon"><i class="fa-brands fa-html5"></i></div>
                        <div class="module-info">
                            <h5>Préparation d’un projet web</h5>
                            <p>Analyse • Planification • Conception</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 2 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m202.php" id="lien">
                        <div class="module-icon"><i class="fa-brands fa-js"></i></div>
                        <div class="module-info">
                            <h5>Approche agile</h5>
                            <p>Scrum • Équipe • Organisation</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 3 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m203.php" id="lien">
                        <div class="module-icon"><i class="fa-brands fa-php"></i></div>
                        <div class="module-info">
                            <h5>Gestion des données</h5>
                            <p>SQL • MySQL • Base de données</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 4 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m204.php" id="lien">
                        <div class="module-icon"><i class="fa-solid fa-database"></i></div>
                        <div class="module-info">
                            <h5>Développement front-end</h5>
                            <p>HTML • CSS • JavaScript</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 5 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m205.php" id="lien">
                        <div class="module-icon"><i class="fa-brands fa-bootstrap"></i></div>
                        <div class="module-info">
                            <h5>Développement back-end</h5>
                            <p>PHP • API • Serveur</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 6 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m206.php" id="lien">
                        <div class="module-icon"><i class="fa-solid fa-code"></i></div>
                        <div class="module-info">
                            <h5>Création d’une application Cloud native</h5>
                            <p>Cloud • Déploiement • Services</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 7 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m207.php" id="lien">
                        <div class="module-icon"><i class="fa-solid fa-diagram-project"></i></div>
                        <div class="module-info">
                            <h5>Projet de synthèse</h5>
                            <p>Projet • Intégration • Réalisation</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- MODULE 8 -->
            <div class="col-md-6">
                <div class="module-card">
                    <a href="/api/module/m208.php" id="lien">
                        <div class="module-icon"><i class="fa-brands fa-git-alt"></i></div>
                        <div class="module-info">
                            <h5>Intégration du milieu professionnel</h5>
                            <p>Stage • Communication • Professionnalisme</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= COMPÉTENCES ================= -->
<section id="competences">
    <div class="container">
        <div class="section-title">
            <h2>Mes <span>compétences</span></h2>
            <p>Les technologies que j'utilise</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-brands fa-html5"></i>
                    <h5>HTML5</h5>
                    <p>Création de structures web modernes.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-brands fa-css3-alt"></i>
                    <h5>CSS3</h5>
                    <p>Design et mise en page responsive.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-brands fa-js"></i>
                    <h5>JavaScript</h5>
                    <p>Interactions et fonctionnalités dynamiques.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-brands fa-php"></i>
                    <h5>PHP</h5>
                    <p>Développement Back-End et CRUD.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-solid fa-database"></i>
                    <h5>MySQL</h5>
                    <p>Gestion et conception de bases de données.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-brands fa-bootstrap"></i>
                    <h5>Bootstrap</h5>
                    <p>Création d'interfaces responsive.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-brands fa-git-alt"></i>
                    <h5>Git / GitHub</h5>
                    <p>Gestion des versions et projets.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="skill-card">
                    <i class="fa-solid fa-diagram-project"></i>
                    <h5>UML</h5>
                    <p>Conception et modélisation des applications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= PROJETS ================= -->
<section id="projets">
    <div class="container">
        <div class="section-title">
            <h2>Mes <span>projets</span></h2>
            <p>Quelques projets réalisés pendant ma formation</p>
        </div>
        <div class="row g-4">
            <!-- PROJET 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <img src="/public/images/atelier-pratique-formation-immobilier-espi-montpellier.jpeg" alt="Projet bibliothèque">
                    <div class="project-content">
                        <h4>READLY</h4>
                        <p>Site web de bibliothèque permettant de consulter et louer des livres avec une fonctionnalité d'audiobooks.</p>
                        <span class="badge-tech">HTML</span>
                        <span class="badge-tech">CSS</span>
                        <span class="badge-tech">Bootstrap</span>
                        <span class="badge-tech">PHP</span>
                    </div>
                </div>
            </div>

            <!-- PROJET 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <img src="/public/images/atelier-pratique-formation-immobilier-espi-montpellier.jpeg" alt="Projet gestion">
                    <div class="project-content">
                        <h4>Application de gestion</h4>
                        <p>Application web permettant de gérer des données avec un système CRUD et une base de données MySQL.</p>
                        <span class="badge-tech">PHP</span>
                        <span class="badge-tech">PDO</span>
                        <span class="badge-tech">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- PROJET 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <img src="/public/images/atelier-pratique-formation-immobilier-espi-montpellier.jpeg" alt="Atelier immobilier">
                    <div class="project-content">
                        <h4>Atelier immobilier</h4>
                        <p>Création d'un atelier immobilier pour présenter mes connaissances, mes compétences et mes projets.</p>
                        <span class="badge-tech">HTML</span>
                        <span class="badge-tech">CSS</span>
                        <span class="badge-tech">Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact">
    <div class="container">
        <div class="contact-box">
            <h2>Travaillons ensemble 🚀</h2>
            <p class="mt-3">Vous avez un projet ou une opportunité de stage ? N'hésitez pas à me contacter.</p>
            <div class="mt-4">
                <p><i class="fa-solid fa-envelope"></i> <a href="mailto:hibahamjan1@gmail.com">hibahamjan1@gmail.com</a></p>
                <p><i class="fa-brands fa-github"></i> <a href="#">GitHub</a></p>
                <p><i class="fa-brands fa-linkedin"></i> <a href="#">LinkedIn</a></p>
            </div>
        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <p class="mb-0">© 2026 Hiba Hamjan — Portfolio Développeuse Full Stack</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>