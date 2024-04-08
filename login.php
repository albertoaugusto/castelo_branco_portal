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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Condômino | Login</title>
    <!--css-->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <main>
        <section class="container">
            <form action="" method="POST">
                <h1 class="title-form">
                    Área do Condômino
                </h1>
                <label for="user">Usuário</label>
                <input type="text" name="user" id="user" class="input user" placeholder="Usuário">

                <label for="pass">Senha:</label>
                <input type="password" name="pass" id="pass" class="input pass" placeholder="Senha">

                <input type="submit" value="Acessar">
            </form>
        </section>
    </main>

</body>

</html>