<?php 
    include('index-me-header.php');
    session();
    /*else{

        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customer where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($conn,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_id = $row_customer['customer_id'];
        
        $customer_name = $row_customer['customer_name'];
    } */
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style-me.css">
   
</head>
<body>

    <!-- Contactus Div starts here-->
    <div class="con1">
        <h1> Contact Us Here</h1>
        <p> If you have urgent message please call us. We are live 24/7. We will respond to you within 24 hours</p>
        <form action="#">
            <input type="text" name=""placeholder="Name" id=""> <br>
            <input type="text" name=""placeholder="Email" id=""> <br>
            <input type="text" name=""placeholder="Phone" id=""> <br>
            <input type="text" name="" id=""placeholder="Subject"> 
            <br>
            
            <textarea name="message" type="text" placeholder="Message" id="" cols="30" rows="10"></textarea>
        </form>
        <button type="submit"> <span class="fa fa-paper-plane" id="send-me-messages" style="background-color:white ;"> </span> Send Message</button>
    </div>
    
    <!-- footer-->
   <footer>
       <div class="footer-container">
           <div class="box-1" style=" width: 300px;">
           <h4 style="background-color: black; color: white; font-family: sans-serif;"> Pages</h4> 
           <ul>
               <li class="links-footer-1"> <a href="" class="footer-links-left">Shopping Cart</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left">Contact Us</a></li class="links-footer-1">
               <li class="links-footer-1"> <a href=""class="footer-links-left">Shop</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left">My Account</a></li>
           </ul>
           <br>
           <hr>
           <br>
           <h4 style="background-color: black; color: white; font-family: sans-serif;"> User Section</h4>
           <ul>
               <li class="links-footer-1"> <a href="" class="footer-links-left">Login </a></li>
               <li class="links-footer-1" > <a href=""class="footer-links-left"> Register</a></li>
               
       </div>
        <div class="box-1" style="width: 230px;">
           <h4 style="background-color: black; color: white; font-family: sans-serif;"> Product Catagories</h4> 
           <ul>
               <li class="links-footer-1"> <a href="" class="footer-links-left">Jackets</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left">Shoes</a></li class="links-footer-1">
               <li class="links-footer-1"> <a href=""class="footer-links-left">T-shirt</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left">Shirts</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left">Trouser</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left">Dress</a></li>
           </ul>  
       </div>
       <div class="box-1" style="width: 230px;">
           <h4 style="background-color: black; color: white; font-family: sans-serif;">Find Us</h4> 
           <ul style="background-color: black;">
               <li class="links-footer-1"> <a href=""class="footer-links-left" style="cursor: text; font-weight:bold;">Mogadishu Online Shopping</a></li class="links-footer-1">
               <li class="links-footer-1"> <a href=""class="footer-links-left" style="cursor: text;">Mogadishu</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left"style="cursor: text;">Somalia</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left"style="cursor: text;">+252-34-13456</a></li>
               <li class="links-footer-1"> <a href=""class="footer-links-left"style="cursor: text;">Mogadishu@gmail.com</a></li>
               <br>
               <li class="links-footer-1"> <a href=""class="footer-links-left">Visit Our Web Page</a></li>
           </ul>
               
       </div>
       <div class="box-1" style="width: 350px;">
           <h4 style="background-color: black; color: white; font-family: sans-serif;">Get The News</h4> 
           <ul style="background-color: black;">
               <li class="links-footer-1"> <a href=""class="footer-links-left" style="cursor: text; color: gray;">Don't miss our latest product updates </a></li class="links-footer-1">
               <form action="#">
                   <div class="inside-form" style="margin-top: 10px;margin-bottom: 10px;">
                       <input type="text" name="" id="tex-field-left" style="width: ;">
                    <span> <input type="submit" value="Subscribe" id="tex-field-submit"></span>
                    <input type="text" name="" id="" style="width: 1px; height:37px; background-color: #e7e7e7; color: #e7e7e7; margin-left: -86px; border: 1px solid gray;"> 
                </div>
               </form>
               <hr style="margin:20px 0px;">
               <h4 style="background-color: black; color: white; font-family: sans-serif;">Keep In Touch</h4>
               <p class="social-icons" style="background-color: black;">
                   <a href="#" class="fa fa-facebook" id="social-icon-styling" ></a>
                   <a href="#" class="fa fa-twitter"id="social-icon-styling" ></a>
                   <a href="#" class="fa fa-instagram"id="social-icon-styling" ></a>
                   <a href="#" class="fa fa-google-plus"id="social-icon-styling" ></a>
                   <a href="#" class="fa fa-envelope"id="social-icon-styling" ></a>
               </p>
               
       </div>
       
       </div>
  
       
   </footer>
</body>
 <script src="dirir-js.js"></script>
</html>