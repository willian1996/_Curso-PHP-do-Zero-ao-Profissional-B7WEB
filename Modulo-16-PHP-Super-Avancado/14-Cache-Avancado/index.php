<?php 

function is_valido($cache){
    $ultima_modificacao = filectime($cache);
    $c = time() - $ultima_modificacao;
    
    if($c > 10){
        return false;
    }else{
        return true;
    }
}

$p = 'pagina';

if(isset($_GET['p']) && !empty($_GET['p']) && file_exists('paginas/'.$_GET['p'].'php')){
    $p = $_GET['p'];
}


if(file_exists('caches/'.$p.'cache') && is_valido('caches/'.$p.'cache')){
    require_once 'cache.cache';
}else{
    ob_start();
    require 'paginas/'.$p.'.php';
    $html = ob_get_contents();
    ob_end_clean();

    file_put_contents('caches/'.$p.'cache', $html);
    echo $html;
}



