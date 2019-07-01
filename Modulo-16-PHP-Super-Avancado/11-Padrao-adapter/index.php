<?php

class Pessoa{
    private $nome;
    private $idade;
    
    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    
}

class PessoaAdapter{
    private $sexo;
    private $pessoa;
    
    public function __construct(Pessoa $pessoa){
        $this->pessoa = $pessoa;
    }
    
    public function setSexo($s){
        $this->sexo = $s;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getNome(){
        return $this->pessoa->getNome();
    }
    public function getIdade(){
        return $this->pessoa->getIdade();
    }
}


$pessoa = new Pessoa("Willian", 23);


$pa = new PessoaAdapter($pessoa);
$pa->setSexo("Masculino");


echo "Nome: ".$pa->getNome()."<br>";
echo "Idade: ".$pa->getIdade()."<br>";
echo "Sexo: ".$pa->getSexo();



