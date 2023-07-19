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

    if (!empty($_POST['habilitar']))

    {

        $habilitar = $_POST['habilitar'];

    }else{

        $habilitar = "no";

    }



    if($habilitar == "yes"){

        echo"<script language='javascript' type='text/javascript'> alert('Entrou!')</script>";


        $pergunta = $_POST['pergunta'];

        $per = $_POST['resposta'];

        $sql = "INSERT INTO perguntas (pergunta, resposta) VALUES ('".$pergunta."','".$resposta."')";

        

        if (mysqli_query($con, $sql)) {

            echo"<script language='javascript' type='text/javascript'> alert('Adicionado!');window.location.href='admin.php'</script><input type='hidden' name='habilitar' value='no'>";

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($con);

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

            <a class="w3-btn w3-red w3-round-large w3-right" href="sair.php">Sair</a>

            <form action="adicionarPergunta.php" method="post">

                <div class="w3-row-padding">

                    <div class="w3-third">

                        &nbsp;

                    </div>

                    <div class="w3-third">

                        <h2>Adicionar nova Pergunta</h2>

                        Pergunta:

                        <input class="w3-input w3-border w3-round-large" type="text" name="pergunta" required>

                        <br>

                        Resposta:

                        <input class="w3-input w3-border w3-round-large" type="text" name="resposta" required>
                        <input type='hidden' name='habilitar' value='yes'>

                        <br>

                        <button class="w3-btn w3-green w3-round-large" type="submit">Adicionar</button>

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
