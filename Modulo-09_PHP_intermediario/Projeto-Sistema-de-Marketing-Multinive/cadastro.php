<?php
session_start();
require 'config.php';


if(!empty($_POST['nome']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $id_pai = $_SESSION['mmnlogin'];
    $senha = md5($email);
    
    
    $sql = $pdo->prepare("select * from usuarios where email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();
    
    
    if($sql->rowCount()==0){
        $sql = $pdo->prepare("insert into usuarios (id_pai, nome, email, senha) values (:id_pai, :nome, :email, :senha)");
        $sql->bindValue(":id_pai", $id_pai);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
        
        header("Location: index.php");
        exit;
        
    }
    else{
        "Já existe este usuário cadastrado!";
    } 
}
?>

<h1>Cadastrar Novo usuaio</h1>
<form method="post">
    Nome:<br/>
    <input type="text" name="nome"/><br/><br/>
    
    E-mail:<br/>
    <input type="email" name="email"/><br/><br/>
    
    <input type="submit" value="Cadastrar"/>
</form>

<a href="sair.php">Sair</a>