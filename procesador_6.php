<?php
    include("helper.php");
    
    $helper = new helper();
    $check_palindromo = $_POST['palindromo_check'];
    
    $helper->setPalindromeCheck($check_palindromo);
    
    require "consigna_6.php"; 
?>