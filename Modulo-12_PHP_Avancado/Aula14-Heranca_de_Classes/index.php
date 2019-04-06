<?php

class Animal{
    public $nome;
    public $idade;
}


class Cavalo extends Animal{
    private $qtdPatas;
    private $tipoDePelo;
}

class Gato extends Animal{
    private $qtdPatas;
    private $miado;
}

$cavalo = new Cavalo();

$cavalo->nome = "Bernardo";

echo "O nome do meu cavalo é ".$cavalo->nome;