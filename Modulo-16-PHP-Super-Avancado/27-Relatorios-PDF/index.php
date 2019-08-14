<?php
ob_start();
?>
<h1>Olá Mundo</h1><h4>Sub titulo tec..</h4>

<?php

$html = ob_get_contents();
ob_end_clean();

require_once __DIR__ . '/vendor/autoload.php';

$arquivo = date('d/m/Y-H:i:s').'.pdf';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output($arquivo, 'D');



//I - abra no browser
//D - faz o download
//F - Salva no servidor 
?>

