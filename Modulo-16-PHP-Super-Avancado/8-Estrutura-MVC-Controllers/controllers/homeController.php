<?php

class homeController extends controller{
    
    public function index(){
        $dados = array(
            'quantidade' => 5,
            'nome' => 'willian',
            'idade' => '23'
        );
        
        
        $this->loadTemplate('home', $dados);
    }
    
    
    
}