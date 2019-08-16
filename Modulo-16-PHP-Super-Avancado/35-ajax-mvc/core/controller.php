<?php

class controller{
    
    public function loadView($viewName, $viewData = array()){
        extract($viewData);//tranforme os indices do array em variaveis 
        require_once 'views/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $viewData = array()){
        require_once 'views/template.php';
    }
    
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require_once 'views/'.$viewName.'.php';
    }
    
    
    
}