<?php

class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;
    
  
    
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        if(is_string($t)){
            $this->titulo = $t;
        }
    }
 
    public function addComentario($msg){
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }
    public function getQuantosComentarios(){
        return $this->qtComentarios;
    }
    private function contarComentarios(){
        $this->qtComentarios = count($this->comentarios);
    }
    
}

$post = new Post();

$post->addComentario("Teste1");
$post->addComentario("Teste2");
$post->addComentario("Teste3");

echo "Quantidade de comentarios ".$post->getQuantosComentarios();




