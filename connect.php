<?php
    $host = "localhost";
    $user = "root";  //username
    $pass = "";   //password
    $dbname = "castelo";
    $port = 3306;

    try{
       $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
        echo "Conexão realizada";
    } catch(PDOException $err){
        echo "Erro na conexão: " . $err->getMessage();
    }
?>
