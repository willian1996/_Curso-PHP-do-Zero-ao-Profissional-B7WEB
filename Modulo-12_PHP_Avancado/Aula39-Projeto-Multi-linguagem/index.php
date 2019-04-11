<?php 
session_start();

if(!empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

require_once 'config.php';
require_once 'Language.class.php';


$lang = new Language();
?>
<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>
<a href="index.php?lang=es">Espanõl</a>
<hr>
Linguagem Definida: <?php echo $lang->getLanguage(); ?>
<hr>



<button><?php $lang->get('BUY'); ?></button>

Categoria: <?php $lang->get('CATEGORIA_PHOTO'); ?>



