<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Préparation d’un projet web | Hiba Hamjan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: bold;
            color: #6c63ff !important;
        }

        .module-header {
            background: linear-gradient(135deg, #f8f9fa, #eeeaff);
            padding: 80px 0;
            text-align: center;
        }

        .module-header h1 {
            font-weight: bold;
            color: #6c63ff;
        }

        .module-header p {
            color: #666;
        }

        section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-weight: bold;
        }

        .section-title span {
            color: #6c63ff;
        }

        .work-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            transition: 0.3s;
            border-left: 4px solid #6c63ff;
        }

        .work-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 25px rgba(108,99,255,0.18);
        }

        .work-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            background-color: #eeeaff;
            color: #6c63ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .work-card h5 {
            font-weight: bold;
        }

        .work-card a {
            text-decoration: none;
            color: #212529;
        }

        .work-card a:hover {
            color: #6c63ff;
        }

        .work-card p {
            color: #777;
            margin-bottom: 0;
        }

        .back-btn {
            color: #6c63ff;
            text-decoration: none;
            font-weight: bold;
        }

        .back-btn:hover {
            color: #554de0;
        }

        footer {
            background-color: #212529;
            color: white;
            padding: 25px;
            text-align: center;
        }
        #lien{
            text-decoration:none;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/api/index.php">
                <i class="fa-solid fa-code"></i> Hiba
            </a>
        </div>
    </nav>

    <!-- Header -->
    <section class="module-header">
        <div class="container">
            <h1>1. Préparation d’un projet web</h1>
            <p>Analyse • Modélisation • Design UI/UX</p>
        </div>
    </section>

    <!-- SECTION 1: UML -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Partie <span>UML</span></h2>
                <p>Analyse et modélisation des systèmes</p>
            </div>

            <!-- Travaux Dirigés (TD 1 à 5) -->
            <h4 class="mb-4 text-secondary">Travaux Dirigés</h4>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-file-code"></i></div>
                        <h5><a href="#">TD 01</a></h5>
                        <p>Description du TD 01.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-file-code"></i></div>
                        <h5><a href="#">TD 02</a></h5>
                        <p>Description du TD 02.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-file-code"></i></div>
                        <h5><a href="#">TD 03</a></h5>
                        <p>Description du TD 03.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-file-code"></i></div>
                        <h5><a href="#">TD 04</a></h5>
                        <p>Description du TD 04.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-file-code"></i></div>
                        <h5><a href="#">TD 05</a></h5>
                        <p>Description du TD 05.</p>
                    </div>
                </div>
            </div>

            <!-- Ateliers (1 à 3) -->
            <h4 class="mb-4 text-secondary">Ateliers</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <h5><a href="/public/docs/hiba_hamjan_atelier immobiliere.pdf" id="lien">Atelier 01</a></h5>
                        <p>Atelier UML — Gestion d’une société immobilière</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <h5><a href="#">Atelier 02</a></h5>
                        <p>Conception Atelier 2.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <h5><a href="#">Atelier 03</a></h5>
                        <p>Conception Atelier 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: FIGMA -->
    <section class="bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Partie <span>Figma</span></h2>
                <p>Conception d'interfaces et maquetage UI/UX</p>
            </div>

            <div class="row g-4">
                <!-- Atelier 1 Figma -->
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <h5><a href="#">Atelier 1</a></h5>
                        <p>Initiation à Figma et création des Wireframes.</p>
                    </div>
                </div>

                <!-- Atelier 2 Figma -->
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <h5><a href="#">Atelier 2</a></h5>
                        <p>Conception de maquettes High-Fidelity.</p>
                    </div>
                </div>

                <!-- Atelier 3 Figma -->
                <div class="col-md-4">
                    <div class="work-card">
                        <div class="work-icon">
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <h5><a href="#">Atelier 3</a></h5>
                        <p>Prototypage interactif et composants.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Retour -->
    <div class="container text-center py-5">
        <a href="/api/index.php" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
            Retour aux modules
        </a>
    </div>

    <!-- Footer -->
    <footer>
        © 2026 Hiba Hamjan — Portfolio Développeuse Full Stack
    </footer>

</body>

</html>