$(function(){
    
    //ADICIONANDO UM EVENTO DE CLIQUE 
    $('button').bind('click', function(){
        alert('clicou');
    });
    
    //ADICIONANDO UMA CLASSE AO PASSAR O MOUSE
    $('button').bind('mouseover', function(){
        $(this).addClass('fundovermelho');
    });
    
    //REMOVENDO UMA CLASSE AO TIRAR O MOUSE
    $('button').bind('mouseout', function(){
        $(this).removeClass('fundovermelho');
    });

    /*
    REMOVER ESTE EVENTO 
    $('button').unbind('click');
    
    
    OUTRA FORMA DE REMOVER ESTE EVENTO 
    $('button').off('click');
    */
    
    
    
    
});