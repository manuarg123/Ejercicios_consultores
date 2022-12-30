<?php
    include("helper.php");
    
    $helper = new helper();
    
    $helper->setMultiArray([1, [2, [3, 4]], 'hola', [1, 'buenos dias']],[1, 2, 3, 4, 'hola', 1, 'buenos dias']);
    
    require "consigna_4.php"; 
?>