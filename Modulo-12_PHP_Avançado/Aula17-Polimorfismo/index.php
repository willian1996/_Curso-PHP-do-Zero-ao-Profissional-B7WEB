<?php

class Animal{
    public function getNome(){
        echo "getNome da classe Animal";
    }
    public function testar(){
        echo "testado";
    }
}

class Cachorro extends Animal{
    public function getNome(){
        $this->testar();
    }
}

$animal = new Animal();
$animal->getNome();

echo "<hr>";

$cachorro = new Cachorro();
$cachorro->getNome();