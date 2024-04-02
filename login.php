<?php
    include_once 'connect.php' 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Condômino | Castelo Branco</title>
    <!--css-->
    <link rel="stylesheet" href="login.css.css">
</head>

<body>
    <!--criptografia-->
    <?php
       // echo password_hash("castelobranco@morador", PASSWORD_DEFAULT);
    ?>

    <main>
        <section class="container">

            <?php
                $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                var_dump($data);
                if (!empty($data['sendLogin'])) {
                    var_dump($data);
                }     
            ?>
    
            <form action="" method="POST">
                <h1 class="title-form">
                    Área do Condômino
                </h1>
                <label for="user">Usuário</label>
                <input type="text" name="user" id="user" class="input user" placeholder="Usuário" required>

                <label for="pass">Senha:</label>
                <input type="password" name="pass" id="pass" class="input pass" placeholder="Senha" required>

                <input type="submit" value="Acessar" name="sendLogin">
            </form>
        </section>
    </main>

</body>

</html>