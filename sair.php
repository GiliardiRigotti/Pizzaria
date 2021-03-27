<?php
    require 'db.php';
    session_start();
    $usuario = $_SESSION['usuario'];
    $senha = $_SESSION['senha'];

    if(!mysqli_query($con,"SELECT * FROM usuarios  WHERE usuario = '{$usuario}' AND senha = '{$senha}'")){
        echo"<script language='javascript' type='text/javascript'>
            alert('Você não esta logado');window.location
            .href='login.php';</script>";
    }

    session_abort();
    echo"<script language='javascript' type='text/javascript'>
            alert('Você saiu!');window.location
            .href='login.php';</script>";

?>