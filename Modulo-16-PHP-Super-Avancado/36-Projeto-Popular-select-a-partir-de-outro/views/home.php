<form method="post">
    Escolha o módulo:<br>
    <select name="modulos" id="modulos" onchange="pegarAulas(this)">
        <option value=""></option>
        <?php foreach($modulos as $modulo): ?>
        <option value="<?php echo $modulo['id']; ?>"><?php echo $modulo['titulo']; ?></option>
        <?php endforeach; ?>

    </select><br><br>
    
    Escolha a aula:<br>
    <select name="aulas" id="aulas">
    
    
    
    </select><br><br>
    <input type="submit" value="Enviar">



</form>