<?php
session_start();
require "config.php";


if(isset($_POST['agencia']) && empty($_POST['agencia']) == false){
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);
    
    $sql = $pdo->prepare("select * from contas where agencia = :agencia and conta = :conta and senha = :senha ");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();
    
    
    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        
        $_SESSION['banco'] = $sql['id'];
        header("Location: index.php");
        exit;
    }
    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Faça o Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post">
            Agência:<br/>
            <input type="text" name="agencia"/><br/><br/>
            
            Conta:<br/>
            <input type="text" name="conta"/><br/><br/>
            
            Senha:<br/>
            <input type="password" name="senha"/><br/><br/>
            
            <input type="submit" value="Entrar"/>
        </form>
    </body>
</html>