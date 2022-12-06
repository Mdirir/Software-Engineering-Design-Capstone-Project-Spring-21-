<?php 
     include('index-me-header.php');
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
<body onload="">
    
    <!-- Sign IN starts here-->
    <div class="SigInContainer" style="background-color:#e7e7e7; margin-left:35%">
        <div class="sing-1" style="background-color:white">
            <div style="padding: 10px; margin-bottom: 20px;margin-top: 20px; width: 94%; margin-left: 10px; background-color: white;">
                <span style="background-color: white;cursor: pointer; font-weight: bold;" onclick="login()"> Login</span> <span style="background-color: white;cursor: pointer;font-weight: bold; float:right" onclick="Register()"> Register</span> 
            
           </div>
             <form action="signin-me.php" method="post" style="background-color: white;" id="LoginForm">
           
           <div style="background-color: white;"> <input type="text"name="email" placeholder="Please Enter Your Email" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;" > <br>
            <input type="password"name="password" placeholder="Please Enter Your password" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;"></div>
            <div style="background-color: white;"> <button style="border:none; padding: 10px; margin-top: 10px;background-color: black; width: 94%; margin-left: 10px; color: white; margin-bottom: 20px;" stype="sumbit" name="login">Login</button></div> 
        </form>
        
            <form action="signin-me.php" method="post" style="background-color: white; margin-top:0px; display: none;" id="RegForm" >
            <div style="background-color: white;"> <input type="text"name="name" placeholder="Please Enter Your Name" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;" > <br>
            <input type="text"name="email" placeholder="Please Enter Your Email" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;"> <br>
            <input type="password"name="password" placeholder="Please Enter Your password" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            <br>
            <input type="text" name="region" placeholder="Please Enter Your Region" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            <br>
            <input type="text" name="district" placeholder="Please Enter Your District" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            <br>
            <input type="text" name="contact" placeholder="Please Enter Your Contact" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;"> <br>
            <input type="text" name="address" placeholder="Please Enter Your Address" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            <select name="gender" id="" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
                <option value="0">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            </div>
            <div style="background-color: white;"> <button style="border:none; padding: 10px; margin-top: 10px;background-color: black; width: 94%; margin-left: 10px; color: white; margin-bottom: 20px;" type="sumbit" name="register">Register</button></div> 
            </form>

           
            </div>
   
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
 <script>
		var LoginForm = document.getElementById('LoginForm');
		var RegForm = document.getElementById('RegForm');
		var Indicator = document.getElementById('Indicator');

		function Register() {
            RegForm.style.display = "block";
            LoginForm.style.display = "none";
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(100px)";
		}
		function login() {
            RegForm.style.display = "none";
            LoginForm.style.display = "block";
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(0px)";
		}
</script>
</html>

<?php 
    if(isset($_POST['login'])){
        login_user();
    }
    if(isset($_POST['register'])){
        register_user();
    }
?>