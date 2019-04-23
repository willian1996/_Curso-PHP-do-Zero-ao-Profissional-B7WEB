<?php
require_once 'config.php';
require_once 'classes/reservas.class.php';

$reservas = new Reservas($pdo);


?>
<h1>Reservas</h1>
<a href="reservar.php">Adicionar Reserva</a>
<br><br>

<?php
$lista = $reservas->getReservas();

foreach($lista as $item){
    $dataInicio = date("d/m/Y", strtotime($item["data_inicio"]));
    $dataFim = date("d/m/Y", strtotime($item["data_fim"]));
    echo $item["pessoa"]." reservou o carro ".$item['id_carro']." entre ".$dataInicio." e ".$dataFim."<br>";
}


echo "<hr>";
require_once 'calendario.php';


