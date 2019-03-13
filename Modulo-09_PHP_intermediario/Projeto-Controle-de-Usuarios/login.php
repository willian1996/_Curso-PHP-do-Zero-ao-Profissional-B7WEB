<?php
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $bduser = "root";
    $bdpass = "";
    
    try{
        $db = new PDO($dsn, $bduser, $bdpass);
        
        $sql = $db->query("select * from usuarios where email = '$email' and '$senha'");
        
        if($sql->rowCount() > 0){
            
            $dado = $sql->fetch();
            
            $_SESSION['id'] = $dado['id'];
            
            header("Location: index.php");
            
        }
        
    }catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
    }
}




?>
<!DOCTYPE html>


<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8"/>
        <style>
            form{
                margin: auto;
                margin-top: 200px;
                width: 190px;
                padding: 20px;
                border: 2px solid #000000; 
                border-radius: 10px;
                background-color: #cccccc;
            }
            
        
        
        
        </style>


    </head>
    <body>
        
        
            <form method="post">
                
                E-mail:<br/>
                <input type="email" name="email"/><br/>

                Senha:<br/>
                <input type="password" name="senha"/><br/><br/>

                <input type="submit" value="Entrar"/>
                
            </form>
                
        
        
        
    </body>
</html>
