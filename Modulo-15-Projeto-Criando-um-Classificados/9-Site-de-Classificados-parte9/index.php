<?php 
require_once 'pages/header.php'; 

require_once 'classes/anuncios.class.php';
require_once 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();

$p = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){
    $p = addslashes($_GET['p']);
}

$porPagina = 2;
$total_paginas = ceil($total_anuncios / $porPagina);
$anuncios = $a->getUltimosAnuncios($p, $porPagina);
?>

<div class="container-fluid">
    <div class="jumbotron">
        
        <h2>Nós temos hoje <?php echo $total_anuncios; ?> anúncios.</h2>
        <p>E mais de <?php echo $total_usuarios; ?> usuários cadastrados</p>
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
        <h4>Pesquisa Avançada</h4>
    </div>
    <div class="col-sm-9">
        <h4>Últimos Anúncios</h4>
        <table class="table table-striped">
            <tbody>
                <?php  foreach($anuncios as $anuncio): ?>
                <tr>
                    <td>
                        <?php
                        if(!empty($anuncio['url'])): ?>
                        <img src="assets/img/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="1"/>
                        <?php else: ?>
                        <img src="assets/img/anuncios/default-store.jpg" height="50" border="1"/>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="produto.php?id=<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a><br>
                        <?php echo utf8_encode($anuncio['categoria']); ?>
                    
    
                    </td>
                    <td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <ul class="pagination">
            <?php for($q = 1; $q <= $total_paginas; $q++): ?>
                <li class="<?php echo ($p==$q)?'active':''; ?>"><a href="index.php?p=<?php echo $q; ?>"><?php echo $q; ?></a></li>
            <?php endfor; ?>
        </ul>
    </div>
</div>


    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php require_once 'pages/footer.php'; ?>