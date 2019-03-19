<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);
    
    $para = "williansalesgabriel@hotmail.com";
    $assunto = "Pergunta do Contato";
    $corpo = "Nome: ".$nome." - Email: ".$email." - Mensagem: ".$msg;
    $cabecalho = "From: contato@williansaleswebdev.com"."\r\n".
                 "Reply-To: ".$email."r\n".
                 "X-Mailer: PHP/".phpversion();
    
    mail($para, $assunto, $corpo, $cabecalho);
    
    echo "<h2>Email enviado com sucesso</h2>";
    exit;
                
    
    
    

}





?>
<form method="post">
    Nome:<br>
    <input type="text" name="nome"/><br><br>
    E-mail:<br>
    <input type="email" name="email"/><br/><br/>
    Mensagem:<br>
    <textarea name="msg"></textarea><br><br>
    <input type="submit" value="enviar"/>
</form>