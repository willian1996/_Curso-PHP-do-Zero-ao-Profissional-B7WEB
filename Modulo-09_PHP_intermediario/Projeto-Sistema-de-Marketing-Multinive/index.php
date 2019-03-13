<?php
session_start();

require 'config.php';
require 'funcoes.php';

if(empty($_SESSION['mmnlogin'])){
    header("Location: login.php");
    exit;
}

$id = $_SESSION['mmnlogin'];

$sql = $pdo->prepare("select 
usuarios.nome,
patentes.nome as p_nome
from usuarios 
left join patentes on patentes.id = usuarios.patente
where usuarios.id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

if($sql->rowCount()>0){
    $sql = $sql->fetch();
    $nome = $sql['nome'];
    $p_nome = $sql['p_nome'];
}
else{
    header("Location: login.php");
    exit;
}


$lista = listar($id, $limite);


?>
<h1>Sistema de Marketing Multinível</h1>
<h3>Usuário Logado: <?php echo $nome.' ('.$p_nome.')'; ?></h3>

<a href="cadastro.php">Cadastrar novo usuario</a><br/>

<a href="sair.php">Sair</a>

<h4/>

<h4>Lista de Cadastros</h4>

<?php exibir($lista); ?>



