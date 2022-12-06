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
     <p class="pt-2 p-3">  <i class="fa fa-dashboard"></i> Dashboard / Update Product Category</p> <hr> </div>
            <div class="card md mb-5" style="display:inline-block; width:98%; margin-left: 1%;">
        <div class="card-header" >
           <i class="fa fa-refresh"></i> Update Product Category
        </div>
        <form action="editProductCatagory.php?p_cat_id=<?php echo$_GET['p_cat_id'];?>" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post">
            <!-- -->
             <?php 
                global $dbc;
                $p_cat_id= $_GET['p_cat_id'];
                $get_products = "select * from product_categories where p_cat_id='$p_cat_id'";
                $run_products = mysqli_query($dbc,$get_products);        
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $cat_title=$row_products['p_cat_title'];
                    $cat_desc=$row_products['p_cat_desc'];
                }
            ?>
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Product Title </label>
             <input class="form-control mb-4 mt-4 P-2" name="title" value="<?php echo $cat_title?>" type="text" placeholder="Product Category Title" aria-label="Disabled input example" style="border-right:none;border-left:none; border-radius:0px">
            <div class="mb-3">
            <textarea class="form-control" name="about" value="<?php echo $cat_desc;?>" placeholder="Product Category Description" id="exampleFormControlTextarea1" rows="3" style="border-left:none; border-right:none; border-radius:0px"> <?php echo $cat_desc;?></textarea>
            </div>
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px ;">
                <div class="position-absolute top-0 start-50 translate-middle"> 
                <input class="btn btn-primary" name="update" type="submit" value="Update"></div>
            </div>
            <?php edit_product_categories(); ?>
        </form>
        </div>
    </div>
</body>
