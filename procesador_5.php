<?php
    include("helper.php");
    
    $helper = new helper();
    $check_string= $_POST['string_check'];
    
    $helper->setStringToCheck($check_string);
    
    require "consigna_5.php"; 
?>