<?php
require_once 'config.php';
require_once 'classes/reservas.class.php';

$reservas = new Reservas($pdo);


?>
<h1>Reservas</h1>
<a href="reservar.php">Adicionar Reserva</a>
<br><br>

<form method="get">
    <select name="ano">
        <?php for($q=date('Y');$q >= 2010 ;$q--): ?>
        <option value="<?php echo $q; ?>"><?php echo $q; ?></option>
        <?php endfor; ?>
    </select>
    <select name="mes">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <input type="submit" value="Mostrar"/>
</form>

<?php
if(empty($_GET['ano'])){
    exit;
}

$data = $_GET['ano'].'-'.$_GET['mes'];
$dia1 = date("w", strtotime($data));
$dias = date("t", strtotime($data));
$linhas = ceil(($dia1+$dias) / 7);
$dia1 = -$dia1;
$data_inicio = date("Y-m-d", strtotime($dia1." days", strtotime($data)));
$data_fim = date("Y-m-d", strtotime(( ($dia1 + ($linhas * 7) -1) )." days", strtotime($data)));

$lista = $reservas->getReservas($data_inicio, $data_fim);
/*
foreach($lista as $item){
    $dataInicio = date("d/m/Y", strtotime($item["data_inicio"]));
    $dataFim = date("d/m/Y", strtotime($item["data_fim"]));
    echo $item["pessoa"]." reservou o carro ".$item['id_carro']." entre ".$dataInicio." e ".$dataFim."<br>";
}
*/

echo "<hr>";
require_once 'calendario.php';


