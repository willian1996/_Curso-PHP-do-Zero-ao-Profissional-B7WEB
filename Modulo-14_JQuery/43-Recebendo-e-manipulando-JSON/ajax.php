<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$array = array('status'=>'');

if($nome == "willian" && $senha == "123"){
    $array["status"] = "ok";
}

echo json_encode($array);
