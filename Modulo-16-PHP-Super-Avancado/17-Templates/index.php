<?php
require_once 'template.php';

$array = array(
    "titulo" => "Tutulo da página",
    "nome" => "Fulano",
    "idade" => "23"
    

);

$tpl = new Template('template.phtml');
$tpl->render($array);


