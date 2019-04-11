<?php

try{
    $pdo = new PDO("mysql:dbname=bd_esqueciasenha;host=localhost", "root", "");
    
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit;
}