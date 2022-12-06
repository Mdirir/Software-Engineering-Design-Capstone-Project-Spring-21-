<?php 

    session_start();
    session_destroy();

    echo "<script>window.open('sign.php','_self')</script>";

?>