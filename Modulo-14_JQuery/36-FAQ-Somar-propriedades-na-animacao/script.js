$(function(){
    
    //movendo a div para direita
    $('#btn').bind('click', function(){
        $('.div').animate({
            'margin-left': '+=50'
        }, 1000);
    })
    //movendo  a div para esquerda 
    $('#btn2').bind('click', function(){
        $('.div').animate({
            'margin-left': '-=50'
        }, 1000);
    })
    
    
    
    
    
    
    
    
    
    
    
});