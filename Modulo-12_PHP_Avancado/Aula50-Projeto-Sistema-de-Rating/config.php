<?php

try{
    $pdo = new PDO("mysql:dbname=bd_rating;host=localhost", "root", "");
    
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
