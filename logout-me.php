<?php 
    require('functions/functions-me.php');
    session_start();
    session_destroy();
    echo "<script>window.open('signin-me.php','_self')</script>";
?>