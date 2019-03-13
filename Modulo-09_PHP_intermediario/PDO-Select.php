<?php

// definindo o acesso ao banco de dados 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";


// conectando ao banco de dados 
try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    // fazendo a consulta 
    $sql = "select * from usuarios where email = 'janaina@hotmail.com'";
    $sql = $pdo->query($sql);
    
    if($sql->rowCount()>0){
       
        foreach($sql->fetchAll() as $usuario){
            echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br/>";
        }
        
        
    }
    else{
        echo "Não há usuários cadastrados!";
    }
    
    
    
}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}



?>