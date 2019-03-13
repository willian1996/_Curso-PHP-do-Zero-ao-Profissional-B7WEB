<?php 
session_start();
require 'config.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    $valor = str_replace(",", ".", $_POST['valor']);
    $valor = floatval($valor);
    
    $sql = $pdo->prepare("insert into historico (id_conta, tipo, valor, data_operacao ) values (:id_conta, :tipo, :valor, NOW())");
    
    $sql->bindValue(":id_conta", $_SESSION['banco']);
    $sql->bindValue(":tipo", $tipo);
    $sql->bindValue(":valor", $valor);
    $sql->execute();
    
    
    if($tipo == 0){
        //Depósito
        $sql = $pdo->prepare("update contas set saldo = saldo + :valor where id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
        
    }
    else{
        //Saque
        $sql = $pdo->prepare("update contas set saldo = saldo - :valor where id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    }
    
    header("Location: index.php");
    exit;
    
}
    

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Adicionar Transação</title>
    <meta charset="utf-8"/>
    
    
    
    
    </head>
    <body>
        <form method="POST">
            Tipo de transação:<br/>
            <select name="tipo">
                <option value="0">Depósito</option>
                <option value="1">Retirada</option>
            </select><br/><br/>
            
            Valor:<br/>
            <input type="text" name="valor" pattern="[0-9.,]{1,}" /><br/><br/>
            
            <input type="submit" value="Adicionar"/>
            
            
        
        
        </form>
    
        
        
        
        
        
    
    </body>
</html>