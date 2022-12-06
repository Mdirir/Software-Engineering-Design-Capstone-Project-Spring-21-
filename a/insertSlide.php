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
     <p class="pt-2 ps-3">  <i class="fa fa-dashboard"></i> Dashboard / Insert Slide</p> <hr> </div>
            <div class="card md mb-5" style="display:inline-block; width:1200px; width: 98%; margin-left:1% ;">
        <div class="card-header" >
           <i class="fa fa-plus"></i> Insert Slide
        </div>
        <form action="insertSlide.php" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post" enctype="multipart/form-data">
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Slide Name</label>
            <input class=" form-control mb-4 mt-3 form-responsive me-2 p-2 ps-3" type="text" placeholder="Slide Name" aria-label="Disabled input example" style="border-right:none;border-left:none; border-radius:0px" name="slide_name">
            
            <!---->
            <div class="mb-3">
                <li class="list-group-item fs-5 border-0 mt-3 mb-2" style="width: 200px; display: inline; float:left; line-height: 0px; margin-right: 50px;">Slide Image</li>
                
                <input class="form-control mt-4" style="line-height: 30px; margin-left: 10px; margin-right: 10%; width: 99.2%;" name="product_img1" type="file" id="formFile"required>
            </div>
            <!-- -->
            
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px ;">
                <div class="position-absolute top-0 start-50 translate-middle"> <input class="btn btn-primary" name="insertSlide" type="submit" value="Submit"></div>
            </div>
            <?php insert_SlideImage() ?>
        </form>
        </div>
    </div>
</body>
