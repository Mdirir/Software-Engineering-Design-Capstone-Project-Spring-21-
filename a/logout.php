<?php 
    require('functions/functions-ad.php');
    session_start();
    session_destroy();
    echo "<script>window.open('login.php','_self')</script>";
?>