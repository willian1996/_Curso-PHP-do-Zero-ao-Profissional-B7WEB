<?php
require_once 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/Projeto-Popular-select-a-partir-de-outro/");
    $config['dbname'] = 'bd_popularselect';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'bd_estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}