<?php

// definindo o acesso ao banco de dados 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";


// conectando ao banco de dados 
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $nome = "Testador";
    $email = "teste2@hotmail.com";
    $senha = md5("123");
    
    
    $sql = "insert into usuarios set nome = '$nome', email = '$email', senha = '$senha'";
  
    $sql = $pdo->query($sql);
    
    echo "usuario insetido : ".$pdo->lastInsertId();
    

    
    
}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}



?>