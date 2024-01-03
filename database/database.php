<?php 
    $host = "localhost";
    $db = "bd_php_ionic";
    $port = 3306;
    $user = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo "Erro na conexão com o banco de dados: " . $ex->getMessage();
        exit;
    }
?>
