$(function(){
    
    $('.botao').bind('click', function(){
        $('.div').slideToggle('slow');
    });
    
    $('.hellobar').bind('click', function(){
        $(this).slideUp();
    })
    
   /*
    //'slideUp()' ELEMENTO SOME DE BAIXO PARA CIMA
        $('.div').slideUp();
    
    //'slideDown()' ELEMENTO APARECE DE CIMA PARA BAIXO 
        $('.div').slideDown();
     
    //'slideToggle()' ELEMENTO DESAPARECE E APARECE CADA VE QUE FOR EXECUTADO      
        $('.div').slideToggle();
    
    
    //'slideUp('slow');' ELEMENTO SOME DEVAGAR
        
        $('.div').slideUp('slow');
    
    //'slideDown('slow')' ELEMENTO APARECE DE VAGAR 
    
        $('.div').slideDown('slow');
    */
    
});