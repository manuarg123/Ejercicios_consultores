<?php
    include("helper.php");
    
    $helper = new helper();
    
    $helper->addNumber($_POST["num_1"]);
    $helper->addNumber($_POST["num_2"]);
    $helper->addNumber($_POST["num_3"]);
    
    require "consigna_2.php"; 
?>