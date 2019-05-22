<?php
session_start();

try{
    $pdo = new PDO("mysql:dbname=bd_site-classificados;host=localhost", "root", "");
}catch(PDOException $e){
    echo "FALHOU ".$e->getMessage();
}
