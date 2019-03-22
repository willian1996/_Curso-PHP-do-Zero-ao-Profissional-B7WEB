$(function(){
    //EVENTO MOUSE OVER ADICIONANDO E REMOVENDO UMA CLASSE AO PASSAR COM O MOUSE EM CIMA DO BOTÃO

    /*
    $('button').hover(function(){
        $(this).addClass('fundovermelho');
    },function(){
        $(this).removeClass('fundovermelho');
    });
    */
    
    //SEGUNDA FORMA DE FAZER ISSO
    $('button').hover(function(){
        $(this).toggleClass('fundovermelho');
    });
    
    
    
    //OUTRA FORMA DE FAZER ISSO
    /*
    $('button').mouseover(function(){
        $(this).addClass('fundovermelho');
    });
    $('button').mouseout(function(){
        $(this).removeClass('fundovermelho');
    })
    */
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});