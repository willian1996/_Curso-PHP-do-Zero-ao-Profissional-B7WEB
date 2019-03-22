$(function(){
    
    $('#btn1').bind('click', function(){
        $('#btn2').trigger('mouseover');
    });
    
    $('#btn2').bind('mouseover', function(){
        alert('clicou no botão 2');
    });
    
    
    
    
    
    
    
    
    
    
    
});