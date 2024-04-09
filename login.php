<?php
include('connect.php');

if (isset($_POST['user']) || isset($_POST['pass'])) {

    if (strlen($_POST['user']) == 0) {
        echo "Preencha seu usuário";
    } else if (strlen($_POST['pass']) == 0) {
        echo "Preencha sua senha";
    } else {

        $user = $mysqli->real_escape_string($_POST['user']);
        $pass = $mysqli->real_escape_string($_POST['pass']);

        $sql_code = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quant = $sql_query->num_rows;

        if ($quant == 1) {

            $user_id = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $user_id['id'];

            header("Location: dashboard.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!--HTML-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Condômino | Login</title>
    <!--fonts-->
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" />

    <!--css-->
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            background-image: url(images/bg-admin.jpg);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .formLogin {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border-radius: 7px;
            padding: 40px;
            box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
            gap: 5px
        }

        .formLogin h1 {
            padding: 0;
            margin: 0;
            font-weight: 500;
            font-size: 2.3em;
        }

        .formLogin input {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            margin-top: 5px;
            border-radius: 4px;
            transition: all linear 160ms;
            outline: none;
        }

        .formLogin input:focus {
            border: 1px solid #f72585;
        }

        .formLogin label {
            font-size: 14px;
            font-weight: 600;
        }

        .btn {
            background-color: #000;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            border: none !important;
            transition: all linear 160ms;
            cursor: pointer;
            margin: 0 !important;

        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #cecece;
            color: #000;

        }
    </style>
</head>

<body>
    <main>
        <section class="container">
            <form action="" method="POST" class="formLogin">
                <h1 class="title-form">
                    Área do Condômino
                </h1>
                <label for="user">Usuário:</label>
                <input type="text" name="user" id="user" class="input user" placeholder="Usuário">

                <label for="pass">Senha:</label>
                <input type="password" name="pass" id="pass" class="input pass" placeholder="Senha">

                <input type="submit" value="Acessar" class="btn">
            </form>
        </section>
    </main>

</body>

</html>