$(function(){
    
    //ADICIONANDO CLASSE FUNDOVERMELHO AO CLICAR
    $('button').click(function(){
        $(this).toggleClass('fundovermelho');
        
        /*
        OUTRA FORMA DE FAZER O EVENTO
        if($(this).hasClass('fundovermelho')){
            $(this).removeClass('fundovermelho');
        }else{
            $(this).addClass('fundovermelho');
        }
        */
    });

    
    //ADICIONANDO CLASSE FUNDO VERMELHO AO PASSAR O MOUSE NO BOTÃO
    $('button').mouseover(function(){
        $(this).addClass('fundovermelho');
    })
    
    //REMOVENDO CLASSE FUNDO VERMELHO AO TIRAR O MOUSE DO BOTÃO
    $('button').mouseout(function(){
        $(this).removeClass('fundovermelho');
    })
    
    
    
    
    
    
    
    
    
    
    
    
});