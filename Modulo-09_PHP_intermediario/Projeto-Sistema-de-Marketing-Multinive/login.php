<?php
session_start();
require 'config.php';

if(!empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    
    $sql = $pdo->prepare("select * from usuarios where email = :email and senha = :senha");
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();
    
    if($sql->rowCount()>0){
        $sql = $sql->fetch();
        $_SESSION['mmnlogin'] = $sql['id'];
        
        header("Location: index.php");
        exit;
    }
    else{
        echo "Usuário ou Senha inválidos!";
    }
}



?>
<h1>Faça o Login</h1>
<form method="post">
    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>
    
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
    
    <input type="submit" value="Entrar"/>
</form>