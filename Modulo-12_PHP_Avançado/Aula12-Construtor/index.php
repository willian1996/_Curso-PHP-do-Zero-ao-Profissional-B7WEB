<?php

class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    
    public function __construct($t, $corpo){
        $this->setTitulo($t);
        $this->setCorpo($corpo);
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        if(is_string($t)){
            $this->titulo = $t;
        }
    }
    public function setCorpo($c){
        $this->corpo =$c;
    }
    public function getCorpo(){
        return $this->corpo;
    }
    
}

$post = new Post("Titulo qualquer<br>", "Corpo da pagina");

echo "titulo do post ".$post->getTitulo();
echo "Copor do post ".$post->getCorpo();