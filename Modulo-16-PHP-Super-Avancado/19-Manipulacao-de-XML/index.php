<?php
$xml = simplexml_load_file("ondas.xml");

echo "Cidade: ".$xml->nome. "<br><br>";

echo "Manhã: ".$xml->manha->vento."<br>";
echo "Tarde: ".$xml->tarde->vento."<br>";
echo "Noite: ".$xml->noite->vento."<br>";