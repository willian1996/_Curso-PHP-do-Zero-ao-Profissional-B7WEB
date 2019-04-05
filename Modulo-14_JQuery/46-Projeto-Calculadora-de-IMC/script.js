$(function(){
    
    
    $('button').bind('click', function(){
       
        var altura = $('#altura').val();
        var peso = $('#peso').val();
        
        //SUBSTITUINDO A VIRGULA POR PONTO 
        altura = altura.replace(',', '.');
        peso = peso.replace(',', '.');
        
        //IMC = peso / altura²
        var imc = peso / (Math.pow(altura, 2));
        
        
        
        if(imc < 16){
            var traducao = 'Baixo peso muito grave';
        }else if(imc >= 16 && imc < 16.99){
            var traducao = 'Baixo peso grave';
        }else if(imc >= 17 && imc < 18.49){
            var traducao = 'Baixo peso';
        }else if(imc >= 18.50 && imc < 24.99){
            var traducao = 'Peso normal';
        }else if(imc >= 25 && imc < 29.99){
            var traducao = 'Sobrepeso';
        }else if(imc >= 30 && imc < 34.99){
            var traducao = 'Obesidade gra I';
        }else if(imc >= 35 && imc < 39.99){
            var traducao = 'Obesidade grau II';
        }else{
            var traducao = 'Obesidade grau III';
        }
        
        $('#resultado').html("Seu IMC é "+imc+" KG/m² <br> e seu status é "+traducao);
        
        
    });
    
    /*
    O cálculo do IMC é feito dividindo o peso (em quilogramas) pela altura (em metros) ao quadrado.
    É simples calcular o seu IMC.
    Por exemplo, se o seu peso é 80kg e a sua altura é 1,80m, a fórmula para calcular o IMC ficará:
    IMC = 80 ÷ 1,802
    IMC = 80 ÷ 3,24
    IMC = 24,69
    */
    
    
    
    
    
    
    
    
    
    
});