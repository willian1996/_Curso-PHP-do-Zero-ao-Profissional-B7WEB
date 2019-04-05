$(function(){
    
    
    $('button').bind('click', function(){
        
        $.post('teste.html', function(t){
            $('.div').html(t);
        })
        
    });
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*METOTO AUXILIAR DO AJAX 
    
    //get
    $.get('teste.html', function(t){
            $('.div').html(t);
    })
    
    //load
    $('button').bind('click', function(){
        $('.div').load('teste.html');
    });
    */
});