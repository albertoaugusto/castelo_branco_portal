<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <!--Title-->
    <title>Área do Condômino | Comunicados</title>
    <!--CSS-->
    <style>
        nav {
            background-color: #000;
            color: #FFF;
            margin-bottom: 3rem;
        }

        #navbarNav {
            justify-content: flex-end;
            color: #fff;
        }

        .button {
            padding: 1rem;
            align-items: center;
            justify-content: center;
        }


        .button a {
            padding: 0px;
            color: #fff;
            padding: 1rem;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }

        .button a:hover {
            color: #cecece;
        }

        /*cards*/
        .cards {
            margin: 2rem;
            text-align: center;
        }

        .card {
            margin: 2rem;
        }
    </style>

</head>

<body>
    <!--nav-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="button">
                <a href="dashboard.php">Voltar</a>
            </div>
            <h3>
                Comunicados
            </h3>
        </div>
    </nav>
    <section class="container">
        <div class="cards">
            <h3>COMUNICADO SITE</h3>
            <div class="card">
                <embed src="docs/releases/comunicado-site_0001.pdf" type="application/pdf" height="720px">
            </div>
            <h3>FÉRIAS DO SEGURANÇA</h3>
            <div class="card">
                <embed src="docs/releases/ferias-fábio-2024_0001.pdf" type="application/pdf" height="720px">
            </div>
        </div>
    </section>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>