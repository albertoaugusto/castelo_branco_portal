<?php
    $host = "localhost";
    $user = "root";  //username
    $pass = "";   //password
    $dbname = "castelo";
    $port = 3306;

    $mysqli = new mysqli($host, $user, $pass, $dbname, $port);
    
    if ($mysqli -> error) {
        die("erro na conexão" . $mysqli->error);
    }
?>
