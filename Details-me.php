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
<body >
    
    <!-- Details Div starts here-->
    <div class="deta-Container">
         <?php 
                $product_id= $_GET['product_id'];
                $get_slides = "select * from products where product_id=$product_id";
                $run_slides = mysqli_query($conn,$get_slides);
                
                while ( $row_slides=mysqli_fetch_array($run_slides)){
                    $image_1 = $row_slides['product_img1'];
                    $image_2 = $row_slides['product_img2'];
                    $image_3 = $row_slides['product_img3'];
                     $product_title = $row_slides['product_title'];
                    $product_price = $row_slides['product_price'];
                    $product_desc = $row_slides['product_desc'];
                     $stock = $row_slides['stock'];
                    if ($stock ==0){
                        $stock = "Sold Out";
                    }
                    else{
                        $stock = $stock;
                    }
                }
          ?>
        <div class="deta-items-1">
            <img src="admin_area/product_images/<?php echo $image_1?>" alt="" style="width: 146px;height: 146px; margin-top: 0px; margin-bottom: 10px; border: 3px solid #e7e7e7;" onclick="currentSlide(1)">
            <img src="admin_area/product_images/<?php echo $image_2?>" alt="" style="width: 146px;height: 146px; margin-top: 0px; margin-bottom: 10px; border: 3px solid #e7e7e7;"  onclick="currentSlide(2)">
            <img src="admin_area/product_images/<?php echo $image_3?>" alt="" style="width: 146px;height: 146px; margin-top: 0px; margin-bottom: 10px; border: 3px solid #e7e7e7;"  onclick="currentSlide(3)">
            
        </div>
        <div class="deta-items-2"> <!-- Item slider-->
             <div class="slider">
          <div class="myslider active" style="display: block; ">
              <p style="position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px"> <?php echo$stock?> </p>
              <img src="admin_area/product_images/<?php echo $image_1?>" alt="" style="height: 100%; width: 100%;" class="img-slider-styling">
          </div>
          <div class="myslider">
              <p style="position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px"> <?php echo$stock?> </p>
              <img src="admin_area/product_images/<?php echo $image_2?>" alt="" style="height: 100%; width: 100%;" class="img-slider-styling">
          </div>
          <div class="myslider">
             <p style="position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px"> <?php echo$stock?> </p>
              <img src="admin_area/product_images/<?php echo $image_3?>" alt="" style="height: 100%; width: 100%;" class="img-slider-styling">
          </div>
          <a class="glyphicon glyphicon-chevron-left" id="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="glyphicon glyphicon-chevron-right" id="next" onclick="plusSlides(1)">&#10095;</a>
          <div class="dotsbox" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>  
        </div>

      </div>
        </div>
        <div class="deta-items-3">
           
            <form method="post" action="details-me.php?product_id=<?php echo "$product_id";?>"  style="background-color:white" >
            <h1 style="font-size: 30px; margin: 20px 0px 10px; text-align: center;background-color: white;"><?php echo $product_title?></h1>
            <p> <label for="" class="lbl-style-11" style="background-color: white;" > Product Quantity</label>
            <select id="" value="" class="style-me-opt1" style="background-color: white;" name="product_quantity">
                <option value="1" selected="selected" class="style-me-opt1-select"  >1</option>
                 <option value="2" class="style-me-opt1-select">2</option>
                 <option value="3" class="style-me-opt1-select">3</option>
                 <option value="4" class="style-me-opt1-select">4</option>
                 <option value="5" class="style-me-opt1-select">5</option>
            </select> </p>
            <p> <label for="" class="lbl-style-11" style="background-color: white;" >  Product Size <span style="margin-left: 26px;"></span></label>
            <select  id="" value="1"  class="style-me-opt1" required style="background-color: white;" name="product_size" > 
                <option value="0" class="style-me-opt1-select">Select Size</option>
                 <option value="small" class="style-me-opt1-select">Small</option>
                 <option value="medium" class="style-me-opt1-select">Medium</option>
                 <option value="large" class="style-me-opt1-select">Large</option>
            </select> </p>
            <p style="font-size: 30px; text-align: center;"> $ <?php echo $product_price?></p>
            
            <button class="btn-addmeToCart" type="sumbit" name="addtoCart"> <span class="fa fa-shopping-cart" product_id="<?php echo $product_id; ?>" ></span> Add to Cart </button>
            </form>
        </div>
        <div class="deta-items-4">
            <h4 style="margin: 20px; background-color: white;">Product Details</h4>
            <p > <?php echo $product_desc;?> </p>
            <p style="font-weight: bold;">Size</p>
            <p style="margin-left:30px;">Small</p>
            <p style="margin-left:30px;">Medium</p>
            <p style="margin-left:30px;">Large</p>
        </div>
             <div class="shopShopMore">
        <div class="div5-item-1">
           
            <h3 class="justStoreText" style="text-align: center; line-height: 400px;"> Products You may Like <span> →</span></h3>
        </div>
        <?php 
                $get_products = "select * from products Order by rand() Desc limit 3";
                $run_products = mysqli_query($conn,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_id = $row_products['product_id'];
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                     $stockk = $row_products['stock'];
                    if ($stockk ==0){
                        $stockk = "Sold Out";
                    }
                    else{
                        $stockk = $stockk." ";
                    }
                    
                    echo"
                        <div class='div5-item-1'>
            <div class='div5-item-1-pic'>
            <p style='position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px'> $stockk </p>
                <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white;'> <img src='admin_area/product_images/$product_img1' alt='' style=' width:100%; height:100%'></a> 
            </div>
            <p class='aa'> <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white; color:black'>$product_title</a></p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-alt' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='details-me.php?product_id=$product_id' method='GET' class='btn-styling-1'>View Details</a>
             <a href='details-me.php?product_id=$product_id' method='GET' class='fa fa-shopping-cart' id='btn-styling-2' > Add to Cart </a>
        </div>
                    ";
                }
            ?>
    </div>
    </div>
    
    <!-- footer-->
   <?php include('footer-me.php'); ?>
</body>
 <script src="dirir-js.js"></script>
</html>

<?php 
    if(isset($_POST['addtoCart'])){
        addtoCart();
    }
?>
