<?php
    $con = mysqli_connect("mysql741.umbler.com", "pizzariaaraldi", "araldi2022", "pizzaria");
    if(!$con){
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro:".mysqli_error($con)."');";
    }
?>
