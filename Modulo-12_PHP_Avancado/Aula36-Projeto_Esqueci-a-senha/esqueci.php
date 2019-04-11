<?php
require 'config.php';
if(!empty($_POST['email'])) {

	$email = $_POST['email'];

	$sql = "SELECT * FROM usuarios WHERE email = :email";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email", $email);
	$sql->execute();

	if($sql->rowCount() > 0){

		$sql = $sql->fetch();
		$id = $sql['id'];
        
        $token = md5(time().rand(0, 99999).rand(0, 99999));
        
        $sql = "INSERT INTO usuarios_token (id_usuario, hash, expirado_em) 
                VALUES (:id_usuario, :hash, :expirado_em)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_usuario", $id);
        $sql->bindValue(":hash", $token);
        $sql->bindValue(":expirado_em", date("Y-m-d H:i", strtotime("+2 months")));
        $sql->execute();
        
        $link = "http://localhost/_Curso-PHP-do-Zero-ao-Profissional-B7WEB/Modulo-12_PHP_Avancado/Aula36-Projeto_Esqueci-a-senha/redefinir.php?token=".$token;
        
        $mensagem =  "Acesse seu email e clique no link para redefinir sua senha:<br>";
        
        $assunto = "Redefinir senha";
        $headers = "From: seuemail@seusite.com.br"."\r\n".
                   "X-Mailer: PHP/".phpversion();
        
        //mail($email, $assunto, $mensagem, $headers);
        
        echo "<a href='$link'>$mensagem</a>";;
        exit;
        
        
    }
}

?>

<form method="POST">
    Qual seu email?<br>
    <input type="email" name="email"/><br><br>
    
    <input type="submit" value="enviar"/>


</form>
