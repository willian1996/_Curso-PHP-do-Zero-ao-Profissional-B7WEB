<?php

require_once 'contato.class.php';

$contato = new Contato();

//ADICIONANDO CONTATO NOVO
//$contato->adicionar('willian@gmail.com', 'willian');
//$contato->adicionar('fulano@gmail.com');

//BUSCANDO NOME DO CONTATO
//$nome = $contato->getNome('willian@gmail.com');
//echo "Nome: ".$nome;

//BUSCANDO A LISTA DE TODOS OS CONTATOS
//$lista = $contato->getAll();
//echo "<pre>";
//print_r($lista);
//echo "</pre>";

//EDITANDO CONTATO
//$contato->editar('Fulano', 'fulano@gmail.com');

//EXCLUINDO CONTATO
$excluir = $contato->excluir('fulano@gmail.com');

if($excluir){
    echo "Contato Exluido";
}else{
    echo "Erro ao Excluir";
}
