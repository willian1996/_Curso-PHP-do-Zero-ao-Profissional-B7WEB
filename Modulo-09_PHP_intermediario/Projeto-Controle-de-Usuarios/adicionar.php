<?php 
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    
    $sql = "
    insert into usuarios set nome = '$nome', email = '$email', senha = '$senha'";
    $pdo->query($sql);
    
    header("Location: index.php");
}




 }

else{
    header("Location: login.php");
}
?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
    
    <input type="submit" value="Cadastar"/><br/><br/>
    
    <a href="index.php">Voltar</a>


</form>