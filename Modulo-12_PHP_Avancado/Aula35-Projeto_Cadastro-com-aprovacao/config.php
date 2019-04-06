<?php

try{
    $dsn = "mysql:dbname=bd_cadastro-com-aprovacao;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}