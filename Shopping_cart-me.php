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
<body>

    <!-- Shopping Cart Div starts here-->
    <div class="shop-container">
        <div class="shop-left">
        <form action="Shopping_cart-me.php" method="post" enctype="multipart/form-data" style="background-color:white">
            <h1 style="margin: 10px; background-color: white;">Shopping Cart</h1>
            <p style="margin: 10px;background-color: white">You Currently have <?php  echo count_cart_items(); ?>  itmes</p>
            <table>
                <tr>
                    <th colspan="2">Product</th>
                    <th colspan="2">Quantity</th>
                    <th colspan="2">Price</th>
                    <th colspan="2">Size</th>
                    <th colspan="2">Delete</th>
                    <th colspan="2">Sub-Total</th>
                </tr>
                <tbody>
                 <?php 
                $total=0;
                $get_cart_item = "select * from cart";
                $run_cart = mysqli_query($conn,$get_cart_item);
                
                while ( $row_cart=mysqli_fetch_array($run_cart)){
                    $product_id = $row_cart['p_id'];
                    $product_quantity = $row_cart['qty'];
                    $product_size = $row_cart['size'];
                
            
                $get_products = "select * from products where product_id='$product_id'";
                $run_products = mysqli_query($conn,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_img1 = $row_products['product_img1'];
                    $product_title = $row_products['product_title'];
                    $product_price = $row_products['product_price'];

                    
                
                $sub_total=$product_quantity*$product_price;
                $total +=$sub_total;
            ?>
                    <tr>
                        <td colspan="1" style="width:320px;"> <img src="admin_area/product_images/<?php echo "$product_img1";?> " alt="" style="width:35%; height:100%; float:left; margin-top:10px; margin-bottom:10px;"><span style="background-color:white; line-height:110px"> <?php echo $product_title; ?> </span></td>
                        <td colspan="2"><?php echo $product_quantity; ?></td>
                        <td colspan="2">$<?php echo $product_price; ?></td>
                        <td colspan="2"><?php echo $product_size; ?></td>
                        <td colspan="2"> <input type="checkbox" value="<?php echo $product_id; ?>" name="remove[]"></td>
                        <td colspan="2">$<?php echo $sub_total; ?></td>
                    </tr>
                       <?php } } ?> <!-- closing our loop-->
                </tbody>
                <tr class="makeMeBold">
                    <td colspan="2"> Total</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">$<?php echo $total; ?></td>
                </tr>
            </table>
            <div class="shop-footer-links">
                <a href="shop-me.php" id="shop-footer-style" style="margin-right:220px;"> <span class="fa fa-chevron-left" style="background-color: white;color: black;"></span> Continue Shopping</a>
                <button type="sumbit" name="update" style="background-color:white;padding:10px; font-size:16px; border:1px solid black"> <span class="fa fa-trash" style="background-color: white; color: black;" ></span> Remove Items</button>
                
                <a href="checkout-me.php" id="go-right" style="margin-right:0px; background-color: white; color: black;
     border: 1px solid black;" class="shop-footer-style"> Proceed Checkout <span class="fa fa-chevron-right" style="background-color: white; color: black;"></span></a>
            </div>
            </form>
        </div>
        
               <?php   
                function update_myCart(){
                    include('includes/dbConnection.php'); 
                    if(isset($_POST['update'])){
                    
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($conn,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('Shopping_cart-me.php','_self')</script>";
                                
                            }
                        
                        }
                        
                    }
                    
                }
               update_myCart();
               ?>


        <div class="shop-right">
            <div class="rightHeader"><h3>Order Summary</h3></div>
            <p>Shipping and additional costs are calculated based on value you have entered</p>
            <table>
                <tbody>
                    <tr>
                        <td style="color: gray;">
                            Order All Sub-total 
                        </td>
                        <th>$<?php echo $total; ?></th>
                    </tr>
                    <tr>
                        <td style="color: gray;">Shipping and Handling </td>
                        <th style="color: gray;">$ 0</th>
                    </tr>
                    <tr>
                        <td style="color: gray;">Tax</td>
                        <th>$ 0</th>
                    </tr>
                    <tr>
                        <td class="makeMeBold" style="font-size: 20px;">Total</td>
                        <th>$<?php echo $total; ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="shopShopMore">
        <div class="div5-item-1">
            <div class="div5-item-1-pic" style="background-color:white;">
            </div>
            <h3 class="justStoreText" style="margin-left:5px"> Products You may Like <span> →</span></h3>
        </div>
         <?php 
                $get_products = "select * from products Order by rand() Desc limit 3";
                $run_products = mysqli_query($conn,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_id = $row_products['product_id'];
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                     $stock = $row_products['stock'];
                    if ($stock ==0){
                        $stock = "Sold Out";
                    }
                
                    echo "
                    <div class='div5-item-1'>
                        <div class='div5-item-1-pic'>
                        <p style='position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px'>$stock</p> 
                <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white;'> <img src='admin_area/product_images/$product_img1' alt='' style=' width:100%; height:100%'></a>
            </div>
            <p class='aa'>$product_title</p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-alt' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='details-me.php?product_id=$product_id' method='GET' class='btn-styling-1'>View Details</a>
             <a href='details-me.php?product_id=$product_id' method='GET' class='fa fa-shopping-cart' id='btn-styling-2'> Add to Cart</a>
                 </div>   ";
            }
        ?>   
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