<?php

try{
    $pdo = new PDO("mysql:dbname=bd_permissao_usuarios;host=localhost", "root", "");
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}