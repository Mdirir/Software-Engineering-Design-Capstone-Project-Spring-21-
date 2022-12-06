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
     <p class="pt-2 ps-3">  <i class="fa fa-dashboard"></i> Dashboard / Edit Slides</p> <hr> </div> 
            <div class="card md mb-5" style="display:inline-block; width:90%; margin-left: 5%;">
        <div class="card-header" >
           <i class="fa fa-edit"></i> Edit Slide
        </div>
        <form action="editSlide.php?slide_name=<?php echo$_GET['slide_name']?>" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post" enctype="multipart/form-data">
            <div style="display: table; width: 100%;"> 
            <label for="" class="fs-5 me-3 mt-2 ps-3" style="  display:inline-block">Slide image <?php echo$_GET['slide_name']?></label>
                <input class="form-control p-2 w-100" name="product_img1" type="file" id="formFile" style="margin-left: 0%; border-left:none; border-right:none; border-radius:0px " required>
            
            <?php 
                
                global $dbc;
                $slide_no=$_GET['slide_name'];
                $get_products = "select * from slider where slide_id='$slide_no'";
                $run_products = mysqli_query($dbc,$get_products);        
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $image = $row_products['slide_images'];
                }
            ?>
        
            <div class="mb-3 mt-0">
                <img class="image-responsive" src="slides_images/<?php echo $image ?>" alt="" style="width: 415px; margin-top:10px; margin-left: 10px; height: 300px;" class="border">
            </div>
            <!-- -->
            
            <div class="mb-3">
            </div>
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px ;">
                <div class="position-absolute top-0 start-50 translate-middle"> <input class="btn btn-primary" type="submit" name="updateSlide" value="Update Slide"></div>
            
            </div>
            <?php edit_Slide(); ?>
        </form>
        </div>
    </div>
</body>
