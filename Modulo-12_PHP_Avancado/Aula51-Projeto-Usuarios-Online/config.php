<?php

try{
    $pdo = new PDO("mysql:dbname=bd_usuarios_online;host=localhost", "root", "");
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
