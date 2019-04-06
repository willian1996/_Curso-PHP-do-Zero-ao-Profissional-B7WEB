<?php

class Contato{
    private $pdo;
    
    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=bd_crudoo;host=localhost","root","");
    }
    
    public function adicionar($email, $nome = ''){
        //1 PASSO = VERIFICAR SE O EMAIL JÁ EXISTE NO SISTEMA
        //2 PASSO = ADICIONAR
        
        if($this->existeEmail($email) = false){
            $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            
            return true;
        }else{
            return false;
        }
    }
    
    public function getNome($email){
        $sql = "SELECT nome FROM contatos WHERE email = :email ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $info = $sql->fetch();
            
            return $info['nome'];
        }else{
            return '';
        }
    }
    
    public function getAll(){
        $sql = "SELECT * FROM contatos";
        $sql->$this->pdo->prepare($sql);
        
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
    
    private function existeEmail($email){
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}