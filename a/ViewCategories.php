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
     <p class="pt-2 ps-3">  <i class="fa fa-dashboard"></i> Dashboard / View Category</p> <hr> </div>
            <div class="card md mb-5" style="display:inline-block; width:1200px; width: 98%; margin-left: 1%; ">
        <div class="card-header" >
           <i class="fa fa-eye"></i> View Category
        </div>
        <div class="table-responsive">
      <table class="table table-striped " style="border-collapse: collapse;">
  <thead>
    <tr>
      <th scope="col" colspan="1" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); width: 8%;">Category ID</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Category Title</th>
      
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Category Description</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Edit Category</th>
      <th scope="col" style="border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);">Delete Category</th>

    </tr>
  </thead>
  <tbody>
    <?php view_catagory(); ?>
  </tbody>
</table>
</div>
</div>
</div>
</body>
