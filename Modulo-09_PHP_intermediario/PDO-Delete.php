<?php

// definindo o acesso ao banco de dados 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";


// conectando ao banco de dados 
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $id = "4";
    
    $sql = "delete from usuarios where id = '$id'";
    
    $sql = $pdo->query($sql);

    echo "usuario deletado com sucesso";
    
}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}



?>