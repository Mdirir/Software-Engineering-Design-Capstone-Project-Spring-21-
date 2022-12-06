<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Bootstrap Latest Version-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
  
/* make this imported pages resposive*/
.responsivee{
    margin-left:300px !important; 
    margin-top:10px !important;
    transition:0.4s;
}
@media only screen and (max-width: 980px) {
    .responsivee {
        transition:0.8s;
        margin-left:10px !important; 
        margin-top:10px !important;

    }
}
</style>
<body>
    <div style="margin-left:0px; margin-top:0px; position:relative"> </div>
    <?php include("index.php") ?>
    <div > 
      
      <div class="responsivee">
    <!-- dashboard-->
    <div class="container-bg bg-light w-100" style="display:block; background:white; ">
     <p class="pt-2 ps-3">  <i class="fa fa-dashboard"></i> Dashboard / Insert Product</p> <hr> </div>
            <div class="card md mb-5 ms-3" style="display:inline-block; width:96%;">
        <div class="card-header" >
           <i class="fa fa-plus"></i> Insert Product
        </div>
        <form action="EditProducts.php?edit_product=<?php echo$_GET['edit_product']?>" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post" enctype="multipart/form-data">
             <?php 
                global $dbc;
                $edit_product= $_GET['edit_product'];
                $get_products = "select * from products where product_id='$edit_product'";
                $run_products = mysqli_query($dbc,$get_products);        
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $p_title=$row_products['product_title'];
                    $product_img1=$row_products['product_img1'];
                    $product_img2=$row_products['product_img2'];
                    $product_img3=$row_products['product_img3'];
                    $product_price=$row_products['product_price'];
                    $product_keyword=$row_products['product_keyword'];
                    $product_desc=$row_products['product_desc'];
                    $product_catargory_id = $row_products['p_cat_id'];
                    $catargory_id = $row_products['cat_id'];
                }
                
            ?>
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Product Title </label>
            <input class=" form-control mb-4 mt-4 form-responsive me-2 p-2" name="title" value="<?php echo$p_title ?>" type="text" placeholder="Product Title" aria-label="Disabled input example" style="border-right:none;border-left:none; border-radius:0px">
            <div style="margin-left: 10px;">
            <li class="list-group-item fs-5 border-0" style="width: 100px; display: inline; margin-right: 65px;">Product Catagory</li> <!-- when designing the databse use diffrent names and same val-->
            <input type="radio" class="btn-check" name="options-outlined" <?php if($product_catargory_id =="1") {echo "checked";}?> value="<?php echo "Jacket";?>"  id="success-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3 " for="success-outlined">Jacket</label>
            <input type="radio" class="btn-check" name="options-outlined" <?php if($product_catargory_id =="2") {echo "checked";}?> value="<?php echo "Shoes";?>" id="warning-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="warning-outlined">Shoes</label>
            <input type="radio" class="btn-check" name="options-outlined" <?php if($product_catargory_id =="3") {echo "checked";}?> value="<?php echo"T-shirt";?>"  id="success-outlinedd" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="success-outlinedd">T-shirt</label>
            <input type="radio" class="btn-check" name="options-outlined" <?php if($product_catargory_id =="4") {echo "checked";}?> value="<?php echo"Shirt";?>"  id="light-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="light-outlined">Shirt</label>
            <input type="radio" class="btn-check" name="options-outlined" <?php if($product_catargory_id =="5") {echo "checked";}?> value="<?php echo"Trouser";?>"  id="warning-outlinedd" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="warning-outlinedd">Trouser</label>
            <input type="radio" class="btn-check" name="options-outlined" <?php if($product_catargory_id =="6") {echo "checked";}?> value="<?php echo"Dress";?>"  id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="danger-outlined">Dress</label> <br> </div> 
            <!--GG--> <hr> 
            <div style="margin-left: 10px;">
            <li class="list-group-item fs-5 border-0 mt-3" style="width: 100px; display: inline; margin-right: 140px;">Catagory</li> 
            <input type="radio" class="btn-check" name="a" <?php if($catargory_id =="1") {echo "checked";}?> value="<?php echo"Men";?>"  id="cat-a" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-a">Men</label>
            <input type="radio" class="btn-check" name="a" <?php if($catargory_id =="2") {echo "checked";}?> value="<?php echo "Women";?>"  id="cat-b" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-b">Women</label>
            <input type="radio" class="btn-check" name="a" <?php if($catargory_id =="3") {echo "checked";}?> value="<?php echo"Kids";?>"  id="cat-c" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-c">Kids</label>
            <input type="radio" class="btn-check" name="a" <?php if($catargory_id =="4") {echo "checked";}?> value="<?php echo "Others";?>"  id="cat-d" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-d">Others</label> <br> <br> </div> <hr>
            <!---->
            <div class="mb-3">
                <li class="list-group-item fs-5 border-0 mt-3 mb-1" style="width: 200px; display: block; margin-left: 0px;">Product Image 1</li>
                <input class="form-control w-100 p-2" required value="<?php echo$product_img1;?>" name="product_img1" type="file" id="formFile" style="margin-left: 0%; border-left:hidden; border-right:hidden; border-radius:0px; ">
                <img src="product_images/<?php echo$product_img1;?>" alt="" style="width: 100px; margin-top:10px; margin-left: 10px; height: 120px;">
                <li class="list-group-item fs-5 border-0 mt-3 mb-1" style="width: 200px; display: block; margin-left: 0px;">Product Image 2</li>
                <input class="form-control w-100 p-2" required value="<?php echo$product_img1;?>" name="product_img2" type="file" id="formFile" style="margin-left: 0%; border-left:hidden; border-right:hidden; border-radius:0px; ">
                <img src="product_images/<?php echo$product_img2; ?>" alt="" style="width: 100px; margin-top:10px; margin-left: 10px; height: 120px;">
                <li class="list-group-item fs-5 border-0 mt-3 mb-1" style="width: 200px; display: block; margin-left: 0px;">Product Image 3</li>
                <input class="form-control w-100 p-2" required value="<?php echo$product_img1;?>" name="product_img3" type="file" id="formFile" style="margin-left: 0%; border-left:hidden; border-right:hidden; border-radius:0px; ">
                <img src="product_images/<?php echo$product_img3; ?>" alt="" style="width: 100px; margin-top:10px; margin-left: 10px; height: 120px;">
            </div>
            <!-- -->
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Product Price $  </label>
            <input class="form-control mb-4 P-2" name="price" value="<?php echo$product_price ?>" type="text" placeholder="Product Price" aria-label="Disabled input example"  style="border-right:none;border-left:none; border-radius:0px"> 
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Product Keywords </label>
             <input class="form-control mb-4 mt-4 P-2" name="keyword" value="<?php echo$product_keyword ?>" type="text" placeholder="Product Keywords" aria-label="Disabled input example" style="border-right:none;border-left:none; border-radius:0px">
            <div class="mb-3">
            <textarea class="form-control" name="desc" value="<?php echo$product_desc ?>" id="exampleFormControlTextarea1" rows="3"> <?php echo"$product_desc" ?></textarea>
            </div>
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px ;">
                <div class="position-absolute top-0 start-50 translate-middle"> <input class="btn btn-primary" type="submit" name="update" value="Update Products"></div>
            
            </div>
            <?php  edit_product_items();?>
        </form>
        </div>
</div>
</body>
