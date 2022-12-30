<?php
    include("helper.php");
    $number_1 = $_POST["num_1"];
    $number_2 = $_POST["num_2"];

    $multiplicacion1 = new helper($number_1, $number_2);
    require "consigna_1.php"; 
?>