<?php

class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;
    
    
    public function getId(){
        return $this->id;
    }
    public function setEmail($e){
        $this->email = $e;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setSenha($s){
        $this->senha = $s;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }
}