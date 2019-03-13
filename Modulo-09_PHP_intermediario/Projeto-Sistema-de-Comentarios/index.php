<?php
try{
    $pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root","");
    

    
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    
    
    $sql = $pdo->prepare("insert into comentarios set nome = :nome, mensagem = :mensagem, data = NOW()"); 
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":mensagem",$mensagem);
    $sql->execute();
    
}


?>

<fieldset>
    <form method="post">
        Nome:<br/>
        <input type="text" name="nome"/><br/><br/>
        
        Mensagem:<br/>
        <textarea name="mensagem"></textarea><br/><br/>
        
        <input type="submit" value="Enviar Mensagem"/>
    </form>
</fieldset>
<br/><br/>
<?php

$sql = "select * from comentarios order by data desc";
$sql = $pdo ->query($sql);

if($sql->rowCount($sql)>0){
    foreach($sql->fetchAll() as $mensagem):
    
        ?>
        <strong><?php echo $mensagem['nome']?></strong><br/>
        <?php echo $mensagem['mensagem']?>
        <hr/>

        <?php
    
    
    endforeach;
}
else{
    echo "Não há mensagens.";
}



?>


