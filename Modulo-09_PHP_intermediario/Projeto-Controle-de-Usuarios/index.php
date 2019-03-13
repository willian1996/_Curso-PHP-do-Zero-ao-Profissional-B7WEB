<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    

require 'config.php';


echo '<a href="logout.php?token='.md5(session_id()).'">Sair</a>';
// sim, MD5 é seguro suficiente nesse contexto (e é apenas exemplo).
echo "<br/><br/>";
?>

<a href="adicionar.php">Adicionar novo Usuário</a>
<table border="0" width="100%"><br/><br/><br/>
    
    
    
    <form method="get">
        Ordenar
        <select name="ordem" onchange="this.form.submit()">
            <option></option>
            <option value="nome">por nome</option>
            <option value="email">por e-mail</option>
        
        </select>
    
    
    </form>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
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
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario){
            echo '<tr>';
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
            echo '</td>';
            
        }
    }
    
    }

else{
    header("Location: login.php");
}

    ?>
    
</table><br/>

