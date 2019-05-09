<?php
require_once 'Usuario.class.php';



/* 1 - CRIANDO UM NOVO USUARIO */
$usuario = new Usuario();
$usuario->setEmail("teste@gmail.com");
$usuario->setSenha("123");
$usuario->setNome("Testador");
$usuario->salvar();

echo "Usuario criado com sucesso!";
echo "<hr>";


/* 2 - exibindo as informações do usuario */
$usuario = new Usuario(1);
echo "Meu nome é: ".$usuario->getNome()."<br>";
echo "Meu email é: ".$usuario->getEmail()."<br>";
echo "<hr>";

/*
//3 - ALTERANDO O USUARIO 
$usuario->setNome("Falano");
$usuario->salvar();
echo "Usuario alterado com sucesso <br>";
echo $usuario->getNome();
*/


/* 4 -  DELETEANDO O USUARIO 
$usuario = new Usuario(1);
$usuario->delete();

echo "Usuario deletado com sucesso!";
*/







