$(function(){
    
    
    
    $('a.galeria').bind('click', function(){
        var img = $(this).find('img').attr('src');
        $('.divbox img').attr('src',img);
        $('.divbox').css('height', '300px').css('margin-top', '-180px');
        
        
        $('.bgbox, .divbox').fadeIn('fast');
    });
    
    $('.bgbox, .divbox button').bind('click', function(){
        
        $('.bgbox, .divbox').fadeOut('fast');
        
        
    });
    
    
    
    
    
    
    
    
    
});