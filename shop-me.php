<?php 
    include('includes/dbConnection.php');
    include('index-me-header.php');//no more header fix this in all pages
    $active = 'Shop';
    session();
   
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
    <!-- Shopping  Div starts here-->
    <div class="catagoryHeader">
        <p class="showNewDiv" id="makeMeInline">  New <span class="fa fa-sort-desc" id="spaceMe"></span>
        </p>
        <div class="hoverNew">
            <div class="hoverContainer">
                <div class="hoverItem1">
                <img src="images/mens.jpg" style="width: 250px; height: 250px;;" alt="">
                </div>
                <div class="hoverItem2">
                <?php 
                  prod_cat();  
                ?>
                   
                </div>
                 <div class="hoverItem3">
                    <img src="images/arrival.jpg" style="width: 100%; height: 250;" alt="">
                </div>
            </div>
        </div>
         <p class="showMenDiv" id="makeMeInline">  Men <span class="fa fa-sort-desc" id="spaceMe"></span></p>
        <div class="hoverMen">
            <div class="hoverContainer">
                <div class="hoverItem1">
                <img src="images/meen.jpeg" style="width: 250px; height: 250px;;" alt="">
                </div>
                <div class="hoverItem2">
                <?php 
                  prod_cat();  
                ?>
                </div>
                 <div class="hoverItem3">
                    <img src="images/menclo.jpg" style="width: 100%; height: 250;" alt="">
                </div>
            </div>
        </div>
        
        <p class="showWomenDiv" id="makeMeInline">  Women <span class="fa fa-sort-desc" id="spaceMe"></span></p>
        <div class="hoverWomen">
             <div class="hoverContainer">
                <div class="hoverItem1">
                <img src="images/wo.jpg" style="width: 250px; height: 250px;;" alt="">
                </div>
                <div class="hoverItem2">
                    <?php 
                    prod_cat();  
                    ?>
                </div>
                 <div class="hoverItem3">
                    <img src="images/women.jpg" style="width: 100%; height: 350px;" alt="">
                </div>
            </div>
        </div>
        
        <p class="showKidsDiv" id="makeMeInline">  Kids <span class="fa fa-sort-desc" id="spaceMe"></span></p>
        <div class="hoverKids">
            <div class="hoverContainer">
                <div class="hoverItem1">
                <img src="images/kidssss.jpg" style="width: 250px; height: 250px;;" alt="">
                </div>
                <div class="hoverItem2">
                  <?php 
                  prod_cat();  
                  ?>
                </div>
                 <div class="hoverItem3">
                    <img src="images/kidsd.jpg" style="width: 100%; height: 350px;" alt="">
                </div>
            </div>
        </div>

    </div>
    <div class="shopContainer">
        <div class="shopContainerLeft">
            <div class="part1">
            <h3> Clothing</h3>
            <ul class="shopContainer-left-ul">
                <?php prod_cat_side();?>
            </ul>
        </div>
        <div class="part2">
            <h3> Special <span style="color:red; background-color: #f5f5f5;">Offers</span></h3>
            <div class="imageInsideBody1"><img src="images/spec.jpg" alt="" style="width: 200px; height: 200px; float: right; margin-right: 35px;"></div>
            <div class="imageInsideBody1"><img src="images/suit.jpg" alt="" style="width: 200px; height: 200px; float: right; margin-right: 35px;"></div>
        </div>
        <div class="part2">
            <h3> Also <span style="color:red; background-color: #f5f5f5;">Available</span></h3>
            <div class="imageInsideBody1"><img src="images/womn.jpeg" alt="" style="width: 200px; height: 200px; float: right; margin-right: 35px;"></div>
            <div class="imageInsideBody1"><img src="images/wm.jpg" alt="" style="width: 200px; height: 200px; float: right; margin-right: 35px;"></div>
            <div class="imageInsideBody1"><img src="images/kidssss.jpg" alt="" style="width: 200px; height: 200px; float: right; margin-right: 35px;"></div>
        </div>
        </div>
         <div class="shopContainerRight">
           <?php 
                
                  if(!isset($_GET['p_cat'])){
                   
                    show_all_products();
                  }
                  else{
                     show_user_query_product();
                  }
                
          ?>
    
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
</html>