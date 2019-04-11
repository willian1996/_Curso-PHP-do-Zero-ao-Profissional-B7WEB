<?php 
require_once 'conexao.php'; 

if(isset($_POST['sexo']) && $_POST['sexo'] != ''){
    $sexo = $_POST['sexo'];
    $sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":sexo", $sexo);
    $sql->execute();
}else{
    $sexo = '';
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
}
?>
<form method="post">
    <select name="sexo">
        <option></option>
        <option value="0" <?php echo ($sexo == '0')?'selected="selected"':'';  ?> >Masculino</option>
        <option value="1" <?php echo ($sexo == '1')?'selected="selected"':'';  ?> >Feminino</option>
        <input type="submit" value="filtrar"/>
    </select> 
</form>
<table border="1" width="100%">
    <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
    </tr>
    <?php
    $sexos = array(
        '0' => "Masculino",
        '1' => "Feminino"
    );
    if($sql->rowCount() > 0):
        foreach($sql->fetchAll() as $usuario):
        ?>
            <tr>
                <th><?php echo $usuario['nome']; ?></th>
                <th><?php echo $sexos[$usuario['sexo']]; ?></th>
                <th><?php echo $usuario['idade']; ?></th>
            </tr>
        <?php
        endforeach;
    endif;
    ?>

</table>