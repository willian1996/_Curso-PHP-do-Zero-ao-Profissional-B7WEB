<?php
require_once 'Sobre1.php';
require_once 'Sobre2.php';


$sobre = new \aplicacao\v2\Sobre();

echo "Versao: ".$sobre->getVersao();
