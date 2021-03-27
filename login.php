<?php
    require'db.php';
    $logar = 'no';
    if(!empty($_POST['logar'])){
        $logar = $_POST['logar'];
    }
    if($logar=='yes'){
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);

        if(mysqli_query($con,"SELECT * FROM usuarios  WHERE usuario = '{$usuario}' AND senha = '{$senha}'")){
            session_start();
            $_SESSION['usuario']  = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: admin.php');
        }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos ".$senha."');window.location
            .href='login.php';</script><input type='hidden' name='logar' value='no'>";
        }
    }
?>
<html lang="pt-br">
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="folha.css">
    </head>
    <body>
        <div class="w3-container w3-padding-16 w3-light-grey w3-center">
            <form action="login.php" method="post">
                <div class="w3-row-padding">
                    <div class="w3-third">
                        &nbsp;
                    </div>
                    <div class="w3-third">
                    <img src="img/logo.png" class="w3-image" width="200" height="200">
                    <p> Controle do cardápio do site. </p>
                        <input class="w3-input w3-border w3-round-large" type="text" name="usuario" placeholder="Usuário">
                        <br>
                        <input class="w3-input w3-border w3-round-large" type="password" name="senha" placeholder="Senha">
                        <input class="w3-input w3-border w3-round-large" type="hidden" name="logar" value="yes">
                        <br>
                        <button class="w3-btn w3-green w3-round-large" type="submit">Entrar</button>
                    </div>  
                    <div class="w3-third">
                        &nbsp;
                    </div>      
                </div>    
            </form>
        </div>
        <!-- footer -->
        <footer class="w3-footer w3-light-grey w3-padding-16 w3-center w3-card">
            <p> © 2020 Pizzaria Araldi | Desenvolvido por <i class="fas fa-ghost"></i> codeGhost. </p>  
        </footer>                
    </body>
</html>
