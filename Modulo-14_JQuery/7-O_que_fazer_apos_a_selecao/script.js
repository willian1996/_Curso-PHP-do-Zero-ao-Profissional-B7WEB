$(function(){
    //mudar o html do elemento selecionado
    $('#teste').html('texto mudado');
    
    //mudar adicionar uma classe css em um elemento selecionado
    $('#teste').find('button').addClass('estilo');
    
    //alterando o conteudo do botão
    $('#teste').find('button').html('novo nome do meu botão');
    
})