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

    $id = $_GET['id'];

    if(mysqli_query($con,"DELETE FROM produtos WHERE id= ".$id)){

        echo"<script language='javascript' type='text/javascript'>

        alert('Excluido com sucesso');window.location.href='http://localhost/pizzaria/admin.php;</script>";

    }

?>