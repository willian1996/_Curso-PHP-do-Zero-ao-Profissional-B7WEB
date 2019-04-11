<?php

try{
    global $pdo;
    $pdo = new PDO("mysql:dbname=bd_multi-linguagem;host=localhost", "root", "");
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit;
}