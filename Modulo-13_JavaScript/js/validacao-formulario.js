function validar(){
    var valor = document.getElementById("numero").value;
    
    if(valor.length > 2){
        alert("O numero deve ter 2 ou menos algarismos");
        return false;
    }
    else{
        return true;
    }

}