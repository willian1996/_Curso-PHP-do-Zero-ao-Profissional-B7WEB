$(document).ready(function(){
    
    //passando o elemento #div para uma variavel
    var div = $('#div');
    
    //uma forma de selecionar um elemento 
    $('li:eq(1)').html('item 2');
    
    //outra forma de selecionar passando par uma variavel
    var segundoItem = $('li').eq(2).html('item2');
    
    
});