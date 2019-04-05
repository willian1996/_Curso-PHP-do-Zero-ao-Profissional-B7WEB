$(function(){
    
    
    $('#form').bind('submit', function(e){
        e.preventDefault();
        
        var txt = $(this).serialize();
        console.log(txt);
        
        
        $.ajax({
            type:'POST',
            url:'ajax.php',
            data:txt,
            success:function(resultado){
               $('.div').html('Resultado: '+resultado); 
            },
            error:function(){
                alert('Ocorreu um erro');
            }
            
        });
    });
    
    
    
    
    
    
    
    
    
    
});