
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Bootstrap Latest Version-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

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

<body >
  <div style="margin-left:0px; margin-top:0px; position:relative"> </div>
    <?php include("index.php") ?>
    <div > 
      
      <div class="responsivee">
    <!-- dashboard-->
    <div class="containr-sm-fluid bg-light" style="display:inline-block; background:white; width:100%; ">
     <h3 class="ps-4"> Dashboard</h3> <hr>
     <div class="row-sm">
     <div class="col-sm-3 pt-2 ms-4 mb-4 " style="float:left; background-color: #337ab7; width: 370px;" > <!--fix me-->
        <i class="fa fa-tasks fa-5x ms-2 pb-2" style="color:white"></i>
        <p style=" float: right;margin-right: 20px;"> <span style="font-size: 40px; color:white"> <?php echo product_count(); ?></span> <br> <span style="color:white; line-height: 0px;">Products</span> </p>
        <a href="viewProducts.php" class="bg-light link-light link text-decoration-none p-2 " style=" display:block; color: #337ab7; border: 1px solid; "> View Details <i class="fa fa-arrow-circle-right" style="float: right; margin-right:10px"></i></a>
     </div>
     <div class="col-sm-3 pt-2 ms-4 mb-4" style="float:left; background-color: #5cd85c; width: 370px;" > 
        <i class="fa fa-users fa-5x ms-2 pb-2" style="color:white"></i>
        <p style=" float: right;margin-right: 20px;"> <span style="font-size: 40px; color:white"><?php echo customer_count(); ?></span> <br> <span style="color:white; line-height: 0px;">Customers</span> </p>
        <a href="veiwcustomer.php" class="bg-light link-light link text-decoration-none p-2 " style=" display:block; color: #5cd85c; border: 1px solid; "> View Details <i class="fa fa-arrow-circle-right" style="float: right; margin-right:10px"></i></a>
     </div>
     <div class="col-sm-3 pt-2 ms-4 mb-4" style="float:left; background-color: #f0ad4e; width: 370px;" > 
        <i class="fa fa-tags fa-5x ms-2 pb-2" style="color:white"></i>
        <p style=" float: right;margin-right: 20px;"> <span style="font-size: 40px; color:white;"><?php echo pCatagories_count(); ?></span> <br> <span style="color:white; line-height: 0px;">
      Product Catagories</span> </p>
        <a href="viewProductCatagories.php" class="bg-light link-light link text-decoration-none p-2 " style=" display:block; color: #f0ad4e; border: 1px solid; "> View Details <i class="fa fa-arrow-circle-right" style="float: right; margin-right:10px"></i></a>
     </div>
     <div class="col-sm-3 pt-2 ms-4" style="float:left; background-color: #d9534f; width: 370px;" > 
        <i class="fa fa-shopping-cart fa-5x ms-2 pb-2" style="color:white"></i>
        <p style=" float: right;margin-right: 20px;"> <span style="font-size: 40px; color:white"><?php echo order_count(); ?></span> <br> <span style="color:white; line-height: 0px;">Orders</span> </p>
        <a href="veiworders.php" class="bg-light link-light link text-decoration-none p-2 " style=" display:block; color: #d9534f; border: 1px solid; "> View Details <i class="fa fa-arrow-circle-right" style="float: right; margin-right:10px"></i></a>
     </div>
     </div>
    </div>
         
     <!-- New Order table-->
     <div class="mt-4 mb-4 bg-light" style="width: 100% ; height: auto ; ">
      <div class="card float-start mt-5" style="width:70%; display: inline-block; margin-left:20px;">
      <div class="card-header" > <i class="fa fa-money"></i> New Orders</div>
      <div class="table-responsive">
      <table class="table table-striped " style="border-collapse: collapse;">
  <thead>
    <tr>
      <th scope="col" colspan="1" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Order No</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Customer Email</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);"> Invoice No</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Product ID</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Product Name</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Product Qty</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Product Size</th>
      <th scope="col" >Product Status</th>
    </tr>
  </thead>
  <tbody>
    <?php show_orders(); ?>
  </tbody>
</table>

<a href="#" class=" link-light link text-decoration-none p-2" style=" color: #d9534f; border: 1px solid white;  float: right; border-radius: 5px; background-color: white;"> View All Orders <i class="fa fa-arrow-circle-right" style=" margin-right:10px"></i></a>
</div>
 </div>
 <!-- left side user prorifle-->
      <div class="card ms-5 mt-5 mb-4" style="width: 300px; display: inline-block; height: auto;">
          <?php show_adminInfo() ?>
         </div>
            </div>
      </div>
</div>
</body>
