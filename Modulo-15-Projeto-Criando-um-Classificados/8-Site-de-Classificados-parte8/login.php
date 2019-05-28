<?php require_once 'pages/header.php'; ?>

<div class="container">
    <h1>Login</h1>
    <?php 
    require_once 'classes/usuarios.class.php';
    $u = new Usuarios();
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        
        if($u->login($email, $senha)){
            ?>
            <script>window.location.href="./";</script>
    
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
                Usuário ou Senha inválidos!
            </div>
            <?php
        }
        
        
        
    }
    
    
    ?>
    
    <form method="post">
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required/>
        </div>
        <input type="submit" value="Fazer Login" class="btn btn-default"/>
    
    </form>
</div>









<?php require_once 'pages/footer.php'; ?>