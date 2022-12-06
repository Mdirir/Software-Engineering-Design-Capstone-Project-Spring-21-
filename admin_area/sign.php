<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">
<head>
   <title>Administrator Login </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="assets/css/demo.css">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/mgd.jpg">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/mgd.jpg">
    <link rel="stylesheet" href="style/style.css">
    <style>
        .auth-box .right {
    background-image: url("assets/img/mgd.jpg");
    background-repeat: no-repeat;  
        }
         
    </style>
</head>
<body>
  
  <div id="wrapper" style="background: #fff">
   <div class="vertical-align-wrap">
       <div class="acount">
		<div class="container">
			<div class="row">
				<div class="col-2">
                     <h2 style="padding-top: 29px; top: 50px">Administrator Login</h2>
					<img src="admin_images/mogadish.PNG">	
				</div>
					<div class="col-2">
					<div class="form-container" style="height: 530px; background: #f9f9f9">
						<div class="form-btn">
						
							
						</div>
                        
                        <p class="lead"> Please Login Here </p><br><br>
                        
						 <form id="RegForm" class="form" method="post" action="">
                        
						<input name="admin_email" type="text" class="form-control" required placeholder="Enter Your Email" style="width: 250px;">
                            
				         <input name="admin_pass" type="password" class="form-control" required placeholder="Enter Your password" style="width: 250px;">
                             
                            
							 <button type="submit" name="admin_login" class="btn" style="background: midnightblue; font-size:20px; color: #fff">Login</button>
						</form>
							
					</div>
				</div>
				
			</div>
		</div>
	</div>


       
       
    
    
</div>
</div>
    
  </body>
</html>

<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        
        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
        
        $get_admin = "select * from  admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>



