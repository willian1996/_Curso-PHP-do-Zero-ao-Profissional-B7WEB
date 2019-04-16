<?php
require_once 'config.php';
require_once 'classes/carros.class.php';
require_once 'classes/reservas.class.php';

$reservas = new Reservas($pdo);
$carros = new Carros($pdo);

?>
<h1>Reservas</h1>
<?php
$lista = $reservas->getReservas();

foreach($lista as $item){
    $dataInicio = date("d/m/Y", strtotime($item["data_inicio"]));
    $dataFim = date("d/m/Y", strtotime($item["data_fim"]));
    echo $item["pessoa"]." reservou o carro ".$item['id_carro']." entre ".$dataInicio." e ".$dataFim."<br>";
}

