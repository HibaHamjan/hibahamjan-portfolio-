<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Préparation d’un projet web | Hiba Hamjan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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

        .nav-link:hover {
            color: #6c63ff;
        }

        .module-header {
            background: linear-gradient(135deg, #f8f9fa, #eeeaff);
            padding: 90px 0;
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
            padding: 70px 0;
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

        .work-card p {
            color: #777;
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

    </style>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand" href="../index.html">
                <i class="fa-solid fa-code"></i> Hiba
            </a>

        </div>
    </nav>


    <!-- Header -->

    <section class="module-header">

        <div class="container">

            <h1>Préparation d’un projet web</h1>

            <p>
                Analyse • Planification • Conception
            </p>

        </div>

    </section>


    <!-- Travaux dirigés -->

    <section>

        <div class="container">

            <div class="section-title">

                <h2>Travaux <span>dirigés</span></h2>

                <p>
                    Les travaux réalisés durant le module
                </p>

            </div>


            <div class="row g-4">

                <div class="col-md-6">

                    <div class="work-card">

                        <div class="work-icon">
                            <i class="fa-solid fa-file-code"></i>
                        </div>

                        <h5><a href="public/docs/module/hiba_hamjan_atelier immobiliere.pdf">TD 01</a></h5>

                        <p>
                            Création d'une page web avec HTML et CSS.
                        </p>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="work-card">

                        <div class="work-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <h5>TD 02</h5>

                        <p>
                            Création d'une interface responsive.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Ateliers -->

    <section class="bg-light">

        <div class="container">

            <div class="section-title">

                <h2>Mes <span>ateliers</span></h2>

                <p>
                    Les ateliers pratiques réalisés
                </p>

            </div>


            <div class="row g-4">

                <div class="col-md-6">

                    <div class="work-card">

                        <div class="work-icon">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>

                        <h5>Atelier 01</h5>

                        <p>
                            Création d'une interface web moderne.
                        </p>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="work-card">

                        <div class="work-icon">
                            <i class="fa-solid fa-display"></i>
                        </div>

                        <h5>Atelier 02</h5>

                        <p>
                            Mise en pratique de HTML, CSS et JavaScript.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Retour -->

    <div class="container text-center py-5">

        <a href="../index.html" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
            Retour aux modules
        </a>

    </div>


    <footer>

        © 2026 Hiba Hamjan — Portfolio Développeuse Full Stack

    </footer>

</body>

</html>