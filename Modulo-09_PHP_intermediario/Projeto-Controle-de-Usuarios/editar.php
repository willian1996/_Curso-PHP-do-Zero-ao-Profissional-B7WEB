<?php
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    

require 'config.php';

$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    
    
    $sql = "update usuarios set nome = '$nome', email = '$email' where id = '$id' ";
    $pdo->query($sql);
    
    header("Location: index.php");
}

if(isset($_GET['id']) && empty($_GET['id']) == false){

    $id = addslashes($_GET['id']);
    
    $sql = "select * from usuarios where id = '$id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
    }
    else{
         header("Location: index.php");
    }
}

    }
else{
    header("Location: login.php");
}

?>

<h1>Editar Registro</h1>
<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" value="<?php echo $dado['email']; ?>" /><br/><br/>
    
    
    <input type="submit" value="Atualizar"/><br/><br/>
    
    <a href="index.php">Voltar</a>



</form>