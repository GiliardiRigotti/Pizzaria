<html lang="pt-br">

    <head>

        <title>Administrador</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet" href="folha.css">

    </head>

<?php

    require 'db.php';

    session_start();

    $usuario = $_SESSION['usuario'];

    $senha = $_SESSION['senha'];

    if($usuario == null || $senha == null){
        echo"<script language='javascript' type='text/javascript'>

            alert('Você não esta logado');window.location

            .href='login.php';</script>";
    }


    if(!mysqli_query($con,"SELECT * FROM usuarios  WHERE usuario = '{$usuario}' AND senha = '{$senha}'")){

        echo"<script language='javascript' type='text/javascript'>

            alert('Você não esta logado');window.location

            .href='login.php';</script>";

    }

?>

    <div class="w3-container w3-padding-16 w3-light-grey w3-center">

        <!-- <a class="w3-btn w3-green w3-round-large" href="adicionarCategoria.php">Adicionar Categoria</a> -->

        <a class="w3-btn w3-green w3-round-large" href="adicionarProduto.php">Adicionar Produto</a>
        <a class="w3-btn w3-green w3-round-large" href="alterarPreco.php">Altera Preço das Pizzas</a>


        <a class="w3-btn w3-red w3-round-large w3-right" href="sair.php">Sair</a>

    </div>    

<?php

    $resultado = mysqli_query($con, "SELECT * FROM produtos");

    while ($linha = $resultado->fetch_assoc()) {

?>

    <div class="w3-container w3-padding-16 w3-white w3-card w3-panel">

        <div class="w3-row">

            <div class="w3-quarter w3-container">

                <!-- EMPTY -->

            </div>

            <div class="w3-quarter w3-container">

                <h3>Nome: <?php echo $linha["nome"]?></h3> 

                <p>Valor: R$<?php echo $linha["valor"]?></p>

                <p>Descrição: <?php echo $linha["descricao"]?></p>

                <h3>Categoria: <?php  $resultado2 = mysqli_query($con, "SELECT * FROM categoria WHERE id=".$linha["categoria"]);

                while ($linha2 = $resultado2->fetch_assoc()) {echo $linha2["nome"];}?></h3>

                <br>

            </div>

            <div class="w3-quarter w3-container margin-top">

                <a class="w3-btn w3-red w3-round-large" href="removerProduto.php/?id=<?php echo $linha["id"]?>">Excluir</a>

            </div>

            <div class="w3-quarter w3-container">

                <!-- EMPTY -->

            </div>

        </div>   

    </div> 

       

<?php

    }

?>

 <!-- footer -->

    <footer class="w3-footer w3-light-grey w3-padding-16 w3-center w3-card">

        <p> © 2020 Pizzaria Araldi | Desenvolvido por <i class="fas fa-ghost"></i> codeGhost. </p>  

    </footer>    

</html>