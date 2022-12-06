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
            <div class="card md mb-5" style="display:inline-block; width:97%; margin-left: 1%;">
        <div class="card-header" >
           <i class="fa fa-plus"></i> Insert Product
        </div>
        <form action="" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post" enctype="multipart/form-data">
        <form action="" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post">
           <div style="display: table; width: 100%;"> 
            <label for="" class="fs-5 ms-3 me-3 mt-2" style="  display:inline-block;">Product Title </label>
            <input class=" mb-4 mt-4 form-responsive me-2 p-2 ps-3" name="title" type="text" placeholder="Product Title" aria-label="Disabled input example" style=" border-radius:0px; display: inline ; border-top: 1px solid rgba(0,0,0,.125);border-bottom: 1px solid rgba(0,0,0,.125); width: 100%; border-left:none; border-right:none"> </div> 
            <div style="margin-left: 10px;">
            <li class="list-group-item fs-5 border-0" style="width: 100px; display: inline; margin-right: 65px;">Product Catagory</li> <!-- when designing the databse use diffrent names and same val-->
            <input type="radio" class="btn-check" name="options-outlined"value="1" id="success-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3 " for="success-outlined">Jacket</label>
            <input type="radio" class="btn-check" name="options-outlined"value="2" id="warning-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="warning-outlined">Shoes</label>
            <input type="radio" class="btn-check" name="options-outlined" value="3" id="success-outlinedd" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="success-outlinedd">T-shirt</label>
            <input type="radio" class="btn-check" name="options-outlined" value="4" id="light-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="light-outlined">Shirt</label>
            <input type="radio" class="btn-check" name="options-outlined" value="5" id="warning-outlinedd" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="warning-outlinedd">Trouser</label>
            <input type="radio" class="btn-check" name="options-outlined" value="6" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="danger-outlined">Dress</label> <br> </div> 
            <!--GG--> <hr> 
            <div style="margin-left: 10px;"> 
            <li class="list-group-item fs-5 border-0 mt-3" style="width: 100px; display: inline; margin-right: 5px;">Men's Product Catagory</li>
            <input type="radio" class="btn-check" name="a" value="1" id="menP-a" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="menP-a">Jacket</label>
            <input type="radio" class="btn-check" name="a" value="2" id="menP-b" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="menP-b">Shoes</label>
            <input type="radio" class="btn-check" name="a"value="3" id="menP-c" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="menP-c">T-shirt</label>
            <input type="radio" class="btn-check" name="a" value="4" id="menP-d" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="menP-d">Shirt</label>
            <input type="radio" class="btn-check" name="a" value="5" id="menP-e" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="menP-e">Trouser</label> <br> 
            <!----> </div> <hr>
            <div style="margin-left: 10px;">
            <li class="list-group-item fs-5 border-0 mt-3" style="width: 100px; display: inline; ">Ladies Product Catagory</li> 
            <input type="radio" class="btn-check" name="b" value="1" id="LadyP-a" autocomplete="off">
            <label class="btn btn-outline-dark mb-3 " for="LadyP-a">Jacket</label>
            <input type="radio" class="btn-check" name="b" value="2" id="lady-b" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="lady-b">Shoes</label>
            <input type="radio" class="btn-check" name="b" value="3" id="ladyP-c" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="ladyP-c">T-shirt</label>
            <input type="radio" class="btn-check" name="b"value="4" id="ladyP-d" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="ladyP-d">Shirt</label>
            <input type="radio" class="btn-check" name="b" value="5" id="ladyP-e" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="ladyP-e">Trouser</label> 
            <input type="radio" class="btn-check" name="b"value="6" id="ladyP-f" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="ladyP-f">Dress</label> <br> 
            <!---->  </div> <hr>
            <div style="margin-left: 10px;">
            <li class="list-group-item fs-5 border-0 " style="width: 100px; display: inline; margin-right: 90px;">Kid's Catagory</li>
            <input type="radio" class="btn-check" name="d" value="1" id="kidsP-a" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="kidsP-a">Jacket</label>
            <input type="radio" class="btn-check" name="d"value="2" id="kidsP-b" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="kidsP-b">Shoes</label>
            <input type="radio" class="btn-check" name="d"value="3" id="kidsP-c" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="kidsP-c">T-shirt</label>
            <input type="radio" class="btn-check" name="d"value="4" id="kidsP-d" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="kidsP-d">Shirt</label>
            <input type="radio" class="btn-check" name="d" value="5" id="kidsP-e" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="kidsP-e">Trouser</label>
            <input type="radio" class="btn-check" name="d" value="6" id="kidsP-f" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="kidsP-f">Dress</label> <br> 
            <!-- -->  </div> <hr>
            <div style="margin-left: 10px;">
            <li class="list-group-item fs-5 border-0 mt-3" style="width: 100px; display: inline; margin-right: 140px;">Catagory</li> 
            <input type="radio" class="btn-check" name="c" value="1" id="cat-a" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-a">Men</label>
            <input type="radio" class="btn-check" name="c" value="2" id="cat-b" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-b">Women</label>
            <input type="radio" class="btn-check" name="c" value="3" id="cat-c" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-c">Kids</label>
            <input type="radio" class="btn-check" name="c" value="4" id="cat-d" autocomplete="off">
            <label class="btn btn-outline-dark mb-3" for="cat-d">Others</label> <br> <br> </div>
            <!---->
            <div class="mb-3">
                <li class="list-group-item fs-5 border-0 mt-3 mb-1" style="width: 200px; display: block; margin-left: 0px;">Product Image 1</li>
                <input class="form-control w-100 p-2" name="product_img1" type="file" id="formFile" style="margin-left: 0%; border-left:hidden; border-right:hidden; border-radius:0px; ">
                <li class="list-group-item fs-5 border-0 mt-3 mb-1" style="width: 200px; display: block; margin-left: 0px;">Product Image 2</li>
                <input class="form-control w-100 p-2" name="product_img2" type="file" id="formFile" style="margin-left: 0%; border-left:hidden; border-right:hidden; border-radius:0px; ">
                <li class="list-group-item fs-5 border-0 mt-3 mb-1" style="width: 200px; display: block; margin-left: 0px;">Product Image 3</li>
                <input class="form-control w-100 p-2" type="file" name="product_img3" id="formFile" style="margin-left: 0%; border-left:hidden; border-right:hidden; border-radius:0px; ">
            </div>
            <!-- -->
            <div style="display: table; width: 100%;"> 
            <label for="" class="fs-5 ms-3 me-5" style="  display:inline-block;">Product Price </label>
            <input class=" mb-4 mt-4 form-responsive me-2 p-2 ps-3" name="price" type="text" placeholder=" Product Price" aria-label="Disabled input example" style=" border-radius:0px; display: inline ; border-top: 1px solid rgba(0,0,0,.125);border-bottom: 1px solid rgba(0,0,0,.125); width: 100%; border-left:none; border-right:none"> </div> 
            <div style="display: table; width: 100%; border: 1px;"> 
            <label for="" class="fs-5 ms-3 me-3" style="  display:inline-block;">Product Keywords </label>
            <input class=" mb-4 mt-4 form-responsive me-2 p-2 ps-3" name="keywords" type="text" placeholder="Product Keywords" aria-label="Disabled input example" style=" border-radius:0px; display: inline ; border-top: 1px solid rgba(0,0,0,.125);border-bottom: 1px solid rgba(0,0,0,.125); width: 100%; border-left:none; border-right:none"> </div> 
            <div style="display: table; width: 100%;"> 
            <label for="" class="fs-5 ms-3 me-3" style="  display:inline-block;"> Product Description </label>
            <input class=" mb-4 mt-4 form-responsive me-2 p-2 ps-3" name="desc" type="text" placeholder="Product Description" aria-label="Disabled input example" style=" border-radius:0px; display: inline ; border-top: 1px solid rgba(0,0,0,.125);border-bottom: 1px solid rgba(0,0,0,.125); width: 100%; border-left:none; border-right:none"> </div> 
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px ;">
                <div class="position-absolute top-0 start-50 translate-middle"> <input class="btn btn-primary" type="submit" name="insertProduct" value="Submit"></div>
            </div>
            <?php insert_Product(); ?>
        </form>
        </div>
    </div>
</body>
