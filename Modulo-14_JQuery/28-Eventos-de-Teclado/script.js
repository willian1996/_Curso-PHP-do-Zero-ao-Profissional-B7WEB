$(function(){

    /*
    //evento 'keydown' apertar uma tecla 
    $('#nome').bind('keydown', function(){
        console.log('Ula tecla foi aperdada');
    });
    
    
    //evento 'keyup' soltar uma decla
    $('#nome').bind('keyup', function(e){
        if(e.keyCode == 13){
            console.log("Apertou enter");
        }
        
    });
    */
    //evento parecido com chat
    $('#nome').bind('keyup', function(e){
        if(e.keyCode == 13){
            var txt = $(this).val();
            console.log(txt);
            $(this).val('');
        }
        
    });
    
    
    
    
    
    
    
    
    
    
    
});