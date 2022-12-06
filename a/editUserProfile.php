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
     <p class="pt-2 ps-3">  <i class="fa fa-dashboard"></i> Dashboard / View Users / Edit User</p> <hr> </div> 
            <div class="card md mb-5 ms-3" style="display:inline-block; width:96%;">
        <div class="card-header" >
           <i class="fa fa-edit"></i> Edit user
        </div>
        <?php 
                global $dbc;
                $admin_id= $_SESSION['admin_email'];
                $get_products = "select * from admins where admin_email='$admin_id'";
                $run_products = mysqli_query($dbc,$get_products);        
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $name=$row_products['admin_name'];
                    $email=$row_products['admin_email'];
                    $pass=$row_products['admin_pass'];
                    $image=$row_products['admin_image'];
                    $country=$row_products['admin_country'];
                    $about=$row_products['admin_about'];
                    $contact=$row_products['admin_contact'];
                    $job=$row_products['admin_job'];

                }
            ?>
        <form action="editUserprofile.php?id=<?php echo$_SESSION['admin_email']?>" style=" margin-left:auto; margin-right: auto; " class="form-responsive" method="post" enctype="multipart/form-data">
        
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">Username</label>
            <input class=" form-control mb-1 mt-1 form-responsive me-2 w-75 p-2" type="text" value="<?php echo $name ?>" name="username" placeholder="Username" aria-label="Disabled input example" style="margin-left: 10%;" >
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">Email</label>
            <input class=" form-control mb-1 mt-1 form-responsive me-2 w-75 p-2" type="text" placeholder="Email" name="email" value="<?php echo $email ?>" aria-label="Disabled input example" style="margin-left: 10%">
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">Password</label>
            <input class=" form-control mb-1 mt-1 form-responsive me-2 w-75 p-2" type="text" placeholder="Password" name="password" value="<?php echo $pass ?>" aria-label="Disabled input example" style="margin-left: 10%">
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">Country</label>
            <input class=" form-control mb-1 mt-1 form-responsive me-2 w-75 p-2" type="text" placeholder="Country" name="country" value="<?php echo $country ?>" aria-label="Disabled input example" style="margin-left: 10%">
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">Contact</label>
            <input class=" form-control mb-1 mt-1 form-responsive me-2 w-75 p-2" type="text" placeholder="contact" name="contact" value="<?php echo $contact ?>" aria-label="Disabled input example" style="margin-left: 10%">
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">Job</label>
            <input class=" form-control mb-1 mt-1 form-responsive me-2 w-75 p-2" type="text" placeholder="Job" name="job" value="<?php echo $job?>" aria-label="Disabled input example" style="margin-left: 10%">

             <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">User image</label>
                <input class="form-control p-2 w-75" type="file" id="formFile" style="margin-left: 10%;" name="product_img1" required >
                <img src="admin_images/<?php echo$image;?>" alt="" style="width: 100px; margin-top:10px; margin-left: 10%; height: 120px;">
            <!--GG--> 
            
            <!---->
            
            <!-- -->
            <div class="mb-3">
            <label for="" class="fs-5 me-3 mt-2" style="  display:inline-block; margin-left:10%">About</label>
            <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3" style="margin-left:10%" name="about" value="<?php echo $about?>" placeholder="About"><?php echo $about?></textarea>
            </div>
            <div class="position-relative" style="margin-bottom: 60px; margin-top:30px ;">
                <div class="position-absolute top-0 start-50 translate-middle"> <input class="btn btn-primary" type="submit" name="update" value="Update User"></div>
            </div>
            <?php editUserprofile(); ?>
        </form>
        </div>
</div>
</body>
