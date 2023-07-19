<?php
    $con = mysqli_connect("mysql247.umbler.com", "pizzariaaraldi", "araldi2022", "pizzaria");
    if(!$con){
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro:".mysqli_error($con)."');";
    }
?>
