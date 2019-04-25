<?php
date_default_timezone_set('America/Sao_Paulo');
require_once 'config.php';

//INSERINDO O IP E A HORA DOS USUARIOS QUE ESTÃO ONLINE 
$ip = $_SERVER['REMOTE_ADDR'];
$hora = date('H:i:s');
$sql = $pdo->prepare("INSERT INTO acessos (ip, hora) VALUES (:ip, :hora)");
$sql->bindValue(":ip", $ip);
$sql->bindValue(":hora", $hora);
$sql->execute();

//DELETANDO OS ACESSOS ANTIGOS QUE NÃO SÃO NECESSÁRIOS 
$sql = $pdo->prepare("DELETE FROM acessos WHERE hora < :hora");
$sql->bindValue(":hora", date('H:i:s', strtotime("-5 minutes")));
$sql->execute();

//VERIFICANDO QUANTOS USUARIOS TEM ONLINE 
$sql = "SELECT * FROM acessos WHERE hora > :hora GROUP BY ip";
$sql = $pdo->prepare($sql);
$sql->bindValue(":hora", date('H:i:s', strtotime("-5 minutes")));
$sql->execute();
$contagem = $sql->rowCount();

//MOSTRANDO NA TELA QUANTOS USUARIOS ESTÁ ONLINE NOS ULTIMOS 5 MINUTOS 
echo "ONLINE : ".$contagem;

