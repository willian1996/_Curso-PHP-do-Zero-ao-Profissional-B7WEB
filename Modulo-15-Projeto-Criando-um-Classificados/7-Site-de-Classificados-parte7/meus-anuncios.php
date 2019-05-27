<?php require_once 'pages/header.php'; ?>
<?php
if(empty($_SESSION['cLogin'])){
    ?>
    
    <script>window.location.href="login.php"</script>
    
        
    <?php 
    exit;
}

?>
<div class="container">
    <h1>Meus Anúncios</h1>
    <a href="add-anuncios.php" class="btn btn-default">Adicionar Anúncio</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Título</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        require_once 'classes/anuncios.class.php';
        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();
        
        foreach($anuncios as $anuncios):
            ?>
            <td>
                <?php
                if(!empty($anuncios['url'])): ?>
                <img src="assets/img/anuncios/<?php echo $anuncios['url']; ?>" height="50" border=""/>
                <?php else: ?>
                <img src="assets/img/anuncios/default-store.jpg" height="50" border=""/>
                <?php endif; ?>
            </td>
            <td><?php echo $anuncios['titulo']; ?></td>
            <td>R$ <?php echo number_format($anuncios['valor'], 2); ?></td>
            <td>
                <a href="editar-anuncio.php?id=<?php echo $anuncios['id']; ?>" class="btn btn-success">Editar</a>
                <a href="excluir-anuncio.php?id=<?php echo $anuncios['id']; ?>" class="btn btn-danger">Excluir</a>
        
        
            </td>
        
            <?php 
        endforeach;
        
        
        
        ?>
    </table>








</div>


















<?php require_once 'pages/footer.php'; ?>