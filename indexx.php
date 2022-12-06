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
    
    <!-- Slider Starts here div3-->
    <div class="div3-slider">
      <div class="slider">
          <?php 
                $get_slides = "select * from slider limit 5";
                $run_slides = mysqli_query($conn,$get_slides);
                
                while ( $row_slides=mysqli_fetch_array($run_slides)){
                    $slider_images = $row_slides['slide_images'];
                    
                    echo "
                    <div class='myslider active' style='display: block;'>
    
                    <img src='admin_area/slides_images/$slider_images' alt='' style='height: 100%; width: 100%;' class='img-slider-styling'>
                    </div>
                    ";
                }
          ?>
          
          <a class="glyphicon glyphicon-chevron-left" id="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="glyphicon glyphicon-chevron-right" id="next" onclick="plusSlides(1)">&#10095;</a>
          <div class="dotsbox" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>   
        </div>

      </div>
    </div>
    <!-- div4 starts here featured cat-->
    <div class="div4-container">
        <div class="div4">
        <h1 class="div4-text">FEATURED <span class="text-higlight">CATAGORIES</span>  </h1>
    </div>
    <div class="div4-left">
        <img src="admin_area/product_images/top6.webp" alt="" style="width:120%;height: 100%;">
    </div>
    <div class="div4-middle">
        <img src="admin_area/product_images/kshirt3.jpg" alt="" style="width:120%;height: 100%;">
    </div>
    <div class="div4-right">
        <img src="admin_area/product_images/top15.webp" alt="" style="width:120%;height: 100%;">
    </div>
    </div>
    <!-- div 5 starts-->
    <div class="div4t" style="margin-left:15%; font-size: 10px; margin-top: 50px;">
        <h1 class="div4-text">OUR LATEST <span class="text-higlight">PRODUCTS</span>  </h1>
    </div>
    <div class="div5">
        <?php 
                $get_products = "select * from products Order by 1 Desc limit 16";
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
                    else{
                        $stock = $stock;
                    }
                    
                    echo "
                    <div class='div5-item-1'>

            <div class='div5-item-1-pic'>
                <p style='position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px'>$stock</p>
                <a href='details-me.php?product_id=$product_id' method='GET'style='background-color:white'>
                <img src='admin_area/product_images/$product_img1' alt='' style='width: 100%;height: 100%;'> </a>
            </div>
            <p class='aa'> <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white; color:black'>$product_title</a> </p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-o' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='#' class='btn-styling-1'>View Details</a>
             <a href='' class='fa fa-shopping-cart' id='btn-styling-2'> Add to Cart</a>
        </div>
                    ";
                } 
          ?>
    
        
    </div>
    <!-- div6-->
    <div class="div6"> 
        <div class="div6-left">
            <p> <i class="fa fa-quote-left"></i> </p>
            <p id="feedack-card-1">All Fashion clothes and Exclusive offers are available on Mogadishu online shopping and also it provides all kind of services to the customers</p>
            <p>
                <i class="fa fa-star" id=   "icon-bg-2"> </i>
                <i class="fa fa-star" id=   "icon-bg-2"> </i> 
                <i class="fa fa-star" id=   "icon-bg-2"> </i>
                <i class="fa fa-star" id=   "icon-bg-2"> </i> 
                <i class="fa fa-star-half-alt" id=   "icon-bg-2"> </i> 
            </p>
            <img src="images/u6.png" class="img-feedback" style="width: 50px; height: 50px;" alt="">
            <h3 class="h3-feedback">Muttakin Ahmen</h3>
        </div>
        <!-- feedback 2-->
        <div class="div6-left">
            <p> <i class="fa fa-quote-left"></i> </p>
            <p id="feedack-card-1">I peronally shop this website and i love every part of it. The products are fire and they offer awesome customer service should you need assistance</p>
            <p>
                <i class="fa fa-star" id=   "icon-bg-2"> </i>
                <i class="fa fa-star" id=   "icon-bg-2"> </i> 
                <i class="fa fa-star" id=   "icon-bg-2"> </i>
                <i class="fa fa-star" id=   "icon-bg-2"> </i> 
                <i class="fa fa-star-half-alt" id=   "icon-bg-2"> </i> 
            </p>
            <img src="images/u6.png" class="img-feedback" style="width: 50px; height: 50px;" alt="">
            <h3 class="h3-feedback">Safa Nur</h3>
        </div>
        <!-- Feeback3-->
        <div class="div6-left">
            <p> <i class="fa fa-quote-left"></i> </p>
            <p id="feedack-card-1">I love this website, it's simplicity and it recommends stuff i might like. It's like it knows my fashion choices</p>
            <p>
                <i class="fa fa-star" id=   "icon-bg-2"> </i>
                <i class="fa fa-star" id=   "icon-bg-2"> </i> 
                <i class="fa fa-star" id=   "icon-bg-2"> </i>
                <i class="fa fa-star" id=   "icon-bg-2"> </i> 
                <i class="fa fa-star-half-alt" id=   "icon-bg-2"> </i> 
            </p>
            <img src="images/u6.png" class="img-feedback" style="width: 50px; height: 50px;" alt="">
            <h3 class="h3-feedback">Mohamed Dirir</h3>
        </div>
    </div>
    <!--- Div7-->
    <div class="div7"> 
        <img src=" images/mast.png" alt="">
        <img src=" images/visa.png" alt="">
        <img src="images/premier.png" alt="">
        <img src="images/disc.jpg" alt="">
        <img src="images/logo-paypal.png" alt="">

    </div>
    <!-- footer-->
   <?php include('footer-me.php'); ?>

</body>
 <script src="dirir-js.js"></script>
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