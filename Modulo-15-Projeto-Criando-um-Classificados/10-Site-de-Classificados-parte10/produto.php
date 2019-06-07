<?php 
require_once 'pages/header.php'; 

require_once 'classes/anuncios.class.php';
require_once 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = addslashes($_GET['id']);
}else{
    header("Location: index.php");
}
 


$info = $a->getAnuncio($id);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <div class="corousel slide" data-ride="carousel" id="meuCarousel">
                <div class="carousel-inner" role="listbox">
                    <?php foreach($info['fotos'] as $chave => $foto): ?>
                    <div class="item <?php echo($chave=='0')?'active':''; ?>">
                        <img src="assets/img/anuncios/<?php echo $foto['url']; ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"><span>ant</span></a>
                <a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next"><span>prox</span></a>
            </div>
        </div>
        <div class="col-sm-7">
            <h1><?php echo $info['titulo']; ?></h1>
            <h4><?php echo utf8_encode($info['categoria']); ?></h4>
            <p><?php echo $info['descricao']; ?></p>
            <br>
            <h3>R$ <?php echo number_format($info['valor'], 2); ?></h3>
            <h4>Telefone: <?php echo $info['telefone']; ?></h4>
           
        </div>
    </div>
</div>


    
<?php require_once 'pages/footer.php'; ?>