<?php

include('protect.php');

?>
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

    <title>Área do Condômino | Castelo Branco</title>
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
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            margin: 20px;
            padding: 20px;
            width: 600px;
            min-height: 200px;
            display: grid;
            grid-template-rows: 20px 50px 1fr 50px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
            transition: all 0.2s;
            color: #000;
        }

        .card:hover {
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
            transform: scale(1.01);
        }

        .card__link,
        .card__exit,
        .card__icon {
            position: relative;
            text-decoration: none;
            color: #000;
        }

        .card__link::after {
            position: absolute;
            top: 25px;
            left: 0;
            content: "";
            width: 0%;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.6);
            transition: all 0.5s;
        }

        .card__link:hover::after {
            width: 100%;
        }

        .card__exit {
            grid-row: 1/2;
            justify-self: end;
        }

        .card__icon {
            grid-row: 2/3;
            font-size: 30px;
        }

        .card__title {
            grid-row: 3/4;
            font-weight: 400;
        }

        .card__apply {
            grid-row: 4/5;
            align-self: center;
        }
    </style>
</head>

<body>
    <!--nav-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <h3>
                Bem Vindo, Condômino!
            </h3>
            <div class="button">
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </nav>
    <!--section-->
    <section class="container">
        <div class="cards">
            <div class="card card-1">
                <div class="card__icon"><i class="bi bi-paperclip"></i></div>
                <h2 class="card__title">Atas.</h2>
                <p class="card__apply">
                    <a class="card__link" href="#">Acessar <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
            <div class="card card-1">
                <div class="card__icon"><i class="bi bi-envelope-paper"></i></div>
                <h2 class="card__title">Comunicados.</h2>
                <p class="card__apply">
                    <a class="card__link" href="#">Acessar <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
            <div class="card card-1">
                <div class="card__icon"><i class="bi bi-coin"></i></div>
                <h2 class="card__title">Contas.</h2>
                <p class="card__apply">
                    <a class="card__link" href="#">Acessar <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
            <div class="card card-1">
                <div class="card__icon"><i class="fas fa-bolt"></i></div>
                <h2 class="card__title">Recados.</h2>
                <p class="card__apply">
                    <a class="card__link" href="#">Acessar <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
        </div>
    </section>



    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>