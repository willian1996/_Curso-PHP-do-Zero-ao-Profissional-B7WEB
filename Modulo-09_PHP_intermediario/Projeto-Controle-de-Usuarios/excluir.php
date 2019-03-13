<?php

session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    
require 'config.php';

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);
    
    $sql = "delete from usuarios where id = '$id'";
    $pdo->query($sql);
    
    header("Location: index.php");
}
else{
    header("Location: index.php");
}
    
        }

else{
    header("Location: login.php");
}



?>