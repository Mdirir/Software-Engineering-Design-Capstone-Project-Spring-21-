

<?php 
    // require('functions/functions-me.php'); 
     include("index-me-header.php");    
        
           if(!isset($_SESSION['customer_email'])){
              //require("signin-me.php");
              echo" <script>window.open('signin-me.php','_self');</script>
            ";

              //check if cart has items if so redirect user to payoptions page otherwise indexx page
               
           }else{
               
               include("pay-options.php");
               include("footer-me.php"); 
           }
?>
