<?php

class Contato{
    private $pdo;
    
    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=bd_crudoo;host=localhost","root","");
    }
    
    public function adicionar($email, $nome = ''){
        //1 PASSO = VERIFICAR SE O EMAIL JÁ EXISTE NO SISTEMA
        //2 PASSO = ADICIONAR
        
        if($this->existeEmail($email) == false){
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
    
    public function getInfo($id){
        $sql = "SELECT * FROM contatos where id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            return $sql->fetch();
        }else{
            return array();
        }
    }
    
    public function getAll(){
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->query($sql);
        
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
    
    public function editar($nome, $id){
            $sql = "UPDATE contatos SET nome = :nome WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':id', $id);
            $sql->execute();
            
            
    }
    
    public function excluirPeloID($id){
        $sql = "DELETE FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function excluirPeloEmail($email){
        $sql = "DELETE FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
    }
    
    private function existeEmail($email){
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}