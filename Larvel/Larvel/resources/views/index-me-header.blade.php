<style>
  .userAccount{
    width: 200px;
    height: auto;
    background-color: black;
    display: block;
    position: absolute;
    ;
}
.userAccount li {
    background-color: yellow;
    width: 200px;
    height: auto;
    display: block;
    margin-left:-5px
}



.userAccount span {
    background-color: inherit;
}


.userAccount a {
    width: 100%;
    padding: 0px;
    background-color: white;
    color: black;
    display: block;
    padding-left: 20px;
}

.userAccount a:hover {
    background-color: rgb(224, 224, 224);
}
</style>
<?php 

    //session_start();
    include('includes/dbConnection.php');
    require('functions/functions-me.php');
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
    
    <div class="div1"> 
        <div class="container">
           <div class="div1-left">
               <p class="div1-left-p">  <?php echo count_cart_items()?> items in your cart <span style="margin-left:10px;"> </span>  | <span style="margin-left:10px;"> </span>  Total Price: $<?php echo count_total_price()?> </p>
           </div> 
           <div class="div1-right" >
            <a href="#" id="account-dropdown"> <span class="fa fa-user" style="background-color: midnightblue;"></span> My Account <span class="fa fa-sort-desc" style="background-color: midnightblue;"></span><span  style="margin-left:10px; background-color: midnightblue;"> </span> | <span style="margin-left:10px;"> </span> </a>
            <a href="Shopping_cart-me.php"> Go to my Cart</a>

            <div class="userAccount" style="display: none;position:absolute;z-index:1;">
              <ul>
                <li style="padding-left: 0px;" > <a href="profile-me.php"> <span class="fa fa-user" ></span> Profile</a></li> 
                <li style="padding-left: 0px;"> <a href="editaccount-me.php" ><span class="fa fa-pencil" ></span> Edit Account</a></li> 
                <li style="padding-left: 0px;"> <a href="user-side-me.php"><span class="fa fa-list" ></span> My Orders</a></li> 
                <li style="padding-left: 0px;"> <a href="changePassword-me.php" ><span class="fa fa-key" ></span> Change Password</a></li> 
                <li style="padding-left: 0px;"> <a href="deleteAccount-me.php" ><span class="fa fa-remove" ></span> Delete Account</a></li>
                <li style="padding-left: 0px;"> <a href="logout-me.php" ><span class="fa fa-power-off" ></span> Logout</a></li>    
              </ul>
            </div>
           
           </div> 
        </div>
    </div>
    <!-- div1 ends-->
    <div class="div2">
        <div class="container-div2">
        <div class="div2-inside-left">
          
            <ul>
              <div class="logo" style="display: inline-block; width: 167px; height:100%; background-color: white; margin-left:-70px; border:1px solid; margin-top:1px; margin-right:20px;">
                <div class="logo-left" style="width: 60px; height:100%; background-color: black; display: inline-block;">
                  <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; background-color: black; color: white;;">acme</h2>
                </div>
                <div class="logo-right" style="width: 100px; height:100%; background-color: white; display: inline-block; border: 1px;">
                  <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; background-color: white;">FASHION</h2>
                </div>
          </div>
           <li>
                <a href="indexx.php" class="div-2-a"> Home</a>
            </li> 
            <li>
                <a href="shop-me.php" class="div-2-a"> Shop</a>
            </li> <li>
                <a href="Shopping_cart-me.php" class="div-2-a"> Shopping Cart</a>
            </li> <li>
                <a href="contactus-me.php" class="div-2-a"> Contact us</a>
            </li>
        </ul>
        </div>
        <div class="div2-inside-right">
           <button class="fa fa-search" style="padding: 10px; background-color:midnightblue;color: white; border: none;" onclick="myFunctionSearch()"></button>
           <a href="Shopping_cart-me.php" id="shopping-cart"> <span class="fa fa-shopping-cart" style="background-color: midnightblue; color: white;"></span> <?php echo count_cart_items()?> Items In Your Cart </a>
           <div class="searchTextLine" id="mySearch">
           <form action="find-product-me.php" method="post" style="background-color:white">
           <input type="text" name="item" placeholder="Search Item" id="" style="border: 1px solid midnightblue; border-radius: 3px;"> <button type="submit" class="fa fa-search" style="padding: 10px; border: 1px solid black;border-radius: 0px;margin-left: -255px; height: 40px;background-color:midnightblue;color: white; border: 1px solid midnightblue; border-radius: 3px; display: table-cell;" >  </button> </form></div>  
        </div>
        </div>
    </div>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
  $("#account-dropdown").click(function(){
    $(".userAccount").toggle();
  });
});
</script>
<script>
function myFunctionSearch() {
  var x = document.getElementById("mySearch");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</html>