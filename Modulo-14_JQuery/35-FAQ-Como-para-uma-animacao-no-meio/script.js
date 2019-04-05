$(function(){
    
    $('#btn').bind('click', function(){
        
       $('.div').animate({
           'margin-left': 1000
       },2000);
        
    });
    $('#btn2').bind('click', function(){
        
       $('.div').stop();
        
    });
    
    
    
    
    
    
    
    
    
    
    
});