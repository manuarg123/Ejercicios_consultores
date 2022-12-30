<?php
    include("helper.php");
    
    $helper = new helper();
    
    $helper->setArrayToCut([null, undefined, 0, 1,5,"hola","haha",5.4, true]);
    
    require "consigna_3.php"; 
?>