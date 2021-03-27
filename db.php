<?php
    $con = mysqli_connect("localhost", "root", "", "pizzaria");
    if(!$con){
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro:".mysqli_error($con)."');";
    }
?>