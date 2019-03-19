<?php

$imagem = "imagem.jpg";

$mini_imagem = "mini_imagem.jpg";

list($largura_original, $altura_original) = getimagesize($imagem);

list($largura_mini, $altura_mini) = getimagesize("mini_imagem.jpg");

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);


$imagem_original = imagecreatefromjpeg("imagem.jpg");
$imagem_mini = imagecreatefromjpeg("mini_imagem.jpg");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0,
         $largura_original, $altura_original);

imagecopy($imagem_final, $imagem_mini, 0, 0, 0, 0,
          $largura_mini, $altura_mini
         
         
         
         );

header("Content-Type: image/jpeg");

imagejpeg($imagem_final, null);

?>
