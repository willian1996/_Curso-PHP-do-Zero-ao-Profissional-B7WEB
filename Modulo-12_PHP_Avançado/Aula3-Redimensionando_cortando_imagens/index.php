<?php

$arquivo = "imagem.jpg";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo);

$ratio = $largura_original / $altura_original;

//echo $ratio;

if($largura / $altura > $ratio){
    $largura = $altura * $ratio;
}else{
    $altura = $largura / $ratio;
}


//echo "L ORIGINAL: ".$largura_original." - A ORIGINAL".$altura_original;
//
//echo "<br>";
//
//echo "LARGURA: ".$largura. " - ALTURA: ".$altura;



$image_final = imagecreatetruecolor($largura, $altura);

$imagem_original = imagecreatefromjpeg($arquivo);

imagecopyresampled($image_final, $imagem_original, 
                   0, 0, 0, 0,
                   $largura, $altura, $largura_original, $altura_original
                  );
//transformar o arquivo em imagem

//header("Content-Type: image/jpeg");
imagejpeg($image_final, "min_image,.jpeg", 100);

echo "Imagem redimensionada com sucesso";



