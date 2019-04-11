<?php
try{
    $pdo = new PDO("mysql:dbname=bd_Filtro-em-tabela;host=localhost", "root", "");
//    echo "conectado";
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}


?>