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
     <p class="pt-2 ps-3">  <i class="fa fa-dashboard"></i> Dashboard / Insert Product Catagory</p> <hr> </div>
            <div class="card md mb-5" style="display:inline-block; width:1200px; width: 98%; margin-left:1%;">
        <div class="card-header mb-5" >
           <i class="fa fa-plus"></i> Insert Product Catagory
        </div>
        <form action="insertProductCatagory.php" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post">
            <label for="" class="fs-5 ms-3 me-3" style="  display:inline-block; margin-top:-30px">Product Title </label>
            <input class=" form-control mb-4 mt-2 form-responsive me-2 ps-3" type="text" placeholder="Product Catagory Title" aria-label="Disabled input example" name="title" style="border-right:none;border-left:none; border-radius:0px">
            
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Product Title </label>
            <textarea class="form-control h-25 ps-3" name="about" style="border-radius:0px; border-left:none; border-right:none" placeholder="Product Catagory Description" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px;">
                <div class="position-absolute top-0 start-50 translate-middle"> <input class="btn btn-primary" type="submit" name="insertPCategory" value="Submit"></div>
            
            </div>
            <?php insert_ProductCategory() ?>
        </form>
        </div>
</div>
</body>
