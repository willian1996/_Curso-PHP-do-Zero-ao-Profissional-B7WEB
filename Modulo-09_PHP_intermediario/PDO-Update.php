<?php

// definindo o acesso ao banco de dados 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";


// conectando ao banco de dados 
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $novaSenha = md5("171808");
    
    $sql = "update usuarios set senha = '$novaSenha' where email = 'claudio@teste,com' ";
    
    $sql = $pdo->query($sql);

    echo "senha alterado novamente com sucesso";
    
}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}



?>