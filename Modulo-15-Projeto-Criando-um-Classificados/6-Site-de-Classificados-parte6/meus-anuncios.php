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
    <a href="add-anuncio.php" class="btn btn-default">Adicionar Anúncio</a>
    
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
            <td><img src="assets/img/anuncios/<?php echo $anuncios['url']; ?>" border=""/></td>
            <td><?php echo $anuncios['titulo']; ?></td>
            <td><?php echo number_format($anuncios['valor'], 2); ?></td>
            <td></td>
        
            <?php 
        endforeach;
        
        
        
        ?>
    </table>








</div>


















<?php require_once 'pages/footer.php'; ?>