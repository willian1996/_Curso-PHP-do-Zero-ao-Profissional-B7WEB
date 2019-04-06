$(function(){
    
    
    $('#senha').bind('keyup', function(){
        
        var txt = $(this).val();
        var forca = 0;
        
        //letras
        //numeros
        //caracteres especiais
        //min. de caracteres 
        
        
        if(txt.length > 6){
            forca += 25;
        }
        var reg = new RegExp(/[a-z]/i);
        if(reg.test(txt)){
            forca += 25;
        }
        var reg = new RegExp(/[0-9]/i);
        if(reg.test(txt)){
            forca += 25;
        }
        var reg = new RegExp(/[^a-z0-9]/i);
        if(reg.test(txt)){
            forca += 25;
        }
        
        if(forca >= 75 && forca < 100){
            var aceita = " Senha Segura";
        }else if(forca === 100){
            var aceita = " Senha Super Segura";
        }else{
            var aceita = " Senha Insegura";
        }
        
        
        $('#forca').html('Força: '+forca+' ('+txt+') - <br> '+aceita);
        
        
    })
    
    
    
    
    
    
    
    
    
    
});