<?php
spl_autoload_register(function($class){
    require_once 'classes/'.$class.'.php';
    
});

$cavalo = new Cavalo();
$cavalo->falar();


$pessoa = new Pessoa();
$pessoa->andar();