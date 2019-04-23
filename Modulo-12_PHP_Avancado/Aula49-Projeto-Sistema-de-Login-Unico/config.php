<?php

try{
    $pdo = new PDO("mysql:dbname=bd_login-unico;host=localhost", "root", "");
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
