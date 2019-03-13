$(function(){
    //manipulando width de uma imagem
    $('#teste').find('img').attr('width', 10); 
    
    
    //outra forma de manipular 
    $('#teste').find('img').width(200);
   
    
    //manipulando high de uma imagem
    $('#teste').find('img').attr('height', '450');    
    

    //outra forma de manipular 
    $('#teste').find('img').height(200);
    
    
    //colocar um valor em um input
    $('input').val('teste');
    
    //outra forma de colocar um valor
    $('input').attr('value', 'esse é um teste');
    
    
    //adicionar um item apos outro item dentro do elemento selecionado
    $('ul').append('<li>Item 5</li>');
    
    //adicionar um item antes de outro item dentro do elemento selecionado
    $('#teste').prepend('texto da div');
    
    //adicionar um item antes e fora do elemento selecionado 
    $('input').before('Nome: ');
    
    //adionar um item depois e fora do elemento selecionado
    $('input').after('Senha: ');
    
    //remover um elemento 
    $('input').remove();
});