<?php
require_once 'conexao.php';
/*
1. CALCULAR A QUANTIDADE TOTAL DE PAGINAS 
2. DEFINIR O $p
3. FAZER A QUERY LIMIT

*/

$qt_por_paginas = 5;

$total = 0;
$sql = "SELECT COUNT(*) as c FROM posts";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$total = $sql['c'];
$paginas = $total / $qt_por_paginas;





$pg = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){
    $pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * $qt_por_paginas;


$sql = "SELECT * FROM posts LIMIT $p, $qt_por_paginas";
$sql = $pdo->query($sql);



if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $item){
        echo $item["id"]." - ".$item["titulo"]."<br>".$item["corpo"]."<br><br>";
    }
    
    
}

echo "<hr>";
for($q = 0; $q < $paginas; $q++){
    echo "<a href='./?p=".($q+1)."'>[".($q+1)."]</a>";
}

    







?>