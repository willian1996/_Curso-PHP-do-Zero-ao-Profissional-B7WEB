
//transferindo o jQuery para variavel $j evitando conflito com demais plataformas;
var $j = jQuery.noConflict();
$j(document).ready(function(){
    alert("Esta funcionando");
});




//outra forma de evitar conflito
jQuery(document).ready(function(){

    alert("Funcionando nativamente");

});


