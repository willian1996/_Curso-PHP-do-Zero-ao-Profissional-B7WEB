<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    
    require_once 'config.php';
    
    $pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
    $id = $pdo->lastInsertId();
    
    $md5 = md5($id);
    $link = "http://williansaleswebdev.com/cadastroconfirma/confirmar.php?h=".$md5;
    
    $assunto = "Confirme seu cadastro";
    $msg = "Clique no link abaixa para confirmar seu cadastro:\n\n".$link;
    $headers = "From: contato@williansaleswebdev.com"."\r\n".
        "X-Mailer: PHP/".phpversion();
    
    mail($email, $assunto, $msg, $headers);
    
    echo "<h2>OK! confirme seu cadastro agora!</h2>";
    exit;
}


?>

<form method="post">
    Nome:<br>
    <input type="text" name="nome"/><br><br>
    
    E-mail:<br>
    <input type="email" name="email"/><br><br>
    
    <input type="submit" value="Cadastrar"/>


</form>