<?php

$json = file_get_contents('https://api.hgbrasil.com/weather');



$json = json_decode($json);

var_dump($json);

//echo "Cidade: ". $json->city_name;










