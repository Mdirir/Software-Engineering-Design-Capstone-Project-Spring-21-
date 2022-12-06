<?php
  include('includes/dbConnection.php');
  require('functions/functions-ad.php');
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Bootstrap Latest Version-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
 
</style>

<body>
   <div style="margin-left:0px; margin-top:0px; position:relative"> </div>
    <div > 
      
      <div class="responsivee">
    <!-- dashboard-->
    <div class="container-bg bg-light w-100" style="display:block; background:white; ">
     <p class="pt-2 ps-3 text-center">  <i class="fa fa-user"></i> Admin Login</p> <hr> </div>
     <div class="card md-5 ms-5" style="width:95%">
  <div class="card-body">
    <h5 class="card-title fs-1 text-center">Administrator Login</h5>
  </div>
</div>
           <!-- added-->
           <form class="row g-3 border p-5 mt-5" action="login.php" method="post">
  <div class="col-md-12" style="margin-left:30%; width:50%">
    <label for="validationServer01" class="form-label">Admin Username</label>
    <input type="text" class="form-control" name="username" id="validationServer01" required>
  </div> 
  <div class="col-md-12" style="margin-left:30%; width:50%">
    <label for="validationServer01" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="validationServer01" required>
  </div>

  <div class="col-12" style="margin-left:30%; width:50%">
    <button class="btn btn-primary"name="loginAdmin" type="submit">Sign in</button>
  </div>
  <?php login_admin(); ?>
</form>
</div>
</body>
