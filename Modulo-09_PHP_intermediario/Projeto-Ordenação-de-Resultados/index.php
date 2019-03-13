<?php

try{
    
    $pdo = new PDO("mysql:dbname=bd_ordenar;host=localhost", "root", "");
    
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
    
    
}

?>

<form method="get">
    <select name="ordem" onchange="this.form.submit()">
        <option></option>
        <option value="nome">Por nome</option>
        <option value="idade">Por idade</option>
    </select>
</form>

<table  border="1" width="400">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php 
    if(isset($_GET['ordem']) && empty($_GET['ordem']) == false){
        $ordem = addslashes($_GET['ordem']);
        $sql = "select * from usuarios order by ".$ordem;
    }
    else{
        $sql = "select * from usuarios";
    }
        
    
    $sql = $pdo->query($sql);
    if($sql->rowCount()>0){
        
        foreach($sql->fetchAll() as $usuario):
        ?>
    <tr>
        <td><?php echo $usuario['nome']; ?></td>
        <td><?php echo $usuario['idade']; ?></td>
    </tr>
        <?php
        endforeach;
        
        
    }
    
    ?>




</table>


