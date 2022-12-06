<?php
  session_start();
  include('includes/dbConnection.php');
  require('functions/functions-ad.php');
  session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Bootstrap Latest Version-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- new-->
  
   
   

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
<body>
     <!-- Admin Area Top-->
    <div class="container-fluid" style="background-color: #252636; height: 50px; font-size: 20px; margin-top: -50px;">
        <a href="#" class="link-light text-decoration-none lh-lg p-5;">Admin Area</a>
        <!-- left side -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light float-end h-100 " style="margin-right: 100px; position : relative; z-index: 1; ">
  <div class="container-fluid" style="padding:0px; margin:0px; height: 25px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
      
        <li class="nav-item dropdown" style="font-size: 15px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i>
            Dropdown
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="margin-left: -12px;">
            <li><a class="dropdown-item" href="#"> <i class="fa fa-user"></i> Profile </a></li>
            <li><a class="dropdown-item" href="viewProducts.php"> <i class="fa fa-tag"></i> Products  <span class="badge bg-secondary"><?php echo product_count() ?></span></a></li>
            <li><a class="dropdown-item" href="veiwcustomer.php"><i class="fa fa-users"></i> Customers <span class="badge bg-secondary"><?php echo customer_count() ?></span></a></li>
            <li><a class="dropdown-item" href="ViewCategories.php"> <i class="fa fa-book"></i> Product Categories  <span class="badge bg-secondary"><?php echo pCatagories_count() ?></span></a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="">
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li> </form>
          </ul>
        </li>
      </ul>
  </div>
</nav>
</div> <hr style="margin:3px">
<!-- Left sidebar-->
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: none; width:300px; display:inline-block ">
  <div class="container-fluid">

    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


     <aside class="side-nav " id="show-side-navigation1 " style="background-color: #252636; width:270px; margin-top: 5px; margin-left:-10px;z-index: 1; " >
      <ul class="categories pt-2 pb-2 pe-4">
        <a href="dashboard.php" class="nav-link  ml-2" style="margin-left:-15px; margin-top: 20px;margin-bottom: 0px;border-bottom: 1px solid rgba(255, 255, 255, 0.02); color:#AAA" id="colormewhenHovered"> <i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        <li id="colormewhenHovered"><i class="fa fa-tag" aria-hidden="true"></i><a href="#"> Products</a>  
          <ul class="side-nav-dropdown">
            <li><a href="viewProducts.php" style="margin-left:20px; color:yellow;">View Products</a></li>
            <li><a href="insertProduct.php" style="margin-left:20px; color:yellow;">Insert Product</a></li>
          </ul>
        </li>
        <li id="colormewhenHovered"><i class="fa fa-fw fa-edit" aria-hidden="true"></i><a href="#"> Product Catagories</a>  
          <ul class="side-nav-dropdown">
            <li><a href="viewProductCatagories.php" style="margin-left:5px; color:yellow;">View Product Catagory</a></li>
            <li><a href="insertProductCatagory.php" style="margin-left:5px; color:yellow;">Add Product Catagory</a></li>
          </ul>
        </li>
        <li id="colormewhenHovered"><i class="fa fa-fw fa-book" aria-hidden="true"></i><a href="#"> Catagories</a>  
          <ul class="side-nav-dropdown">
            <li><a href="ViewCategories.php" style="margin-left:20px; color:yellow;">View Catagory</a></li>
            <li><a href="insertCatogory.php" style="margin-left:20px; color:yellow;">Insert Catagory</a></li>
          </ul>
        </li>
        <li id="colormewhenHovered"><i class="fa fa-fw fa-gear" aria-hidden="true"></i><a href="#"> Slides</a>  
          <ul class="side-nav-dropdown">
            <li><a href="viewSlides.php" style="margin-left:20px; color:yellow;">View Slides</a></li>
            <li><a href="insertSlide.php" style="margin-left:20px; color:yellow;">Insert Slides</a></li>
          </ul>
        </li>
       
        <a href="veiwcustomer.php" class="nav-link  ml-2" style="margin-left:-15px; border-bottom: 1px solid rgba(255, 255, 255, 0.02); color:#AAA" id="colormewhenHovered"> <i class="fa fa-fw fa-users" aria-hidden="true"></i> View Customer</a>
        <a href="veiworders.php" class="nav-link  ml-2" style="margin-left:-15px; border-bottom: 1px solid rgba(255, 255, 255, 0.02); color:#AAA" id="colormewhenHovered"> <i class="fa fa-fw fa-shopping-cart" aria-hidden="true"></i> View Orders</a>
         <a href="veiwpayments.php" class="nav-link  ml-2" style="margin-left:-15px;border-bottom: 1px solid rgba(255, 255, 255, 0.02); color:#AAA" id="colormewhenHovered"> <i class="fa fa-fw fa-dollar" aria-hidden="true"></i> View Payments</a> 
        <li id="colormewhenHovered"t><i class="fa fa-home fa-users" aria-hidden="true"></i><a href="#"> Users</a> 

          <ul class="side-nav-dropdown">
            <li><a href="veiwuser.php" style="margin-left:20px; color:yellow;">View Users</a></li>
            <li><a href="editUserprofile.php" style="margin-left:20px; color:yellow;">Edit User Profile</a></li>
            <li><a href="insertUser.php" style="margin-left:20px; color:yellow;">Create User</a></li>
          </ul>
        </li>
        <a href="#" class="nav-link  ml-2" style="margin-left:-15px;  color:#AAA" id="colormewhenHovered"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
        <!--next tab-->
        
      </ul>
    </aside>
    </div>
  </div>
     </nav>
  
<!--

<div class="container" style="height: 88px; width: 85%; background-color: red; margin-left:-20px; display:inline-block; position:relative"> -->
  <?php //include('dashboard.php'); ?> <!-- hello--> <!--
</div>
<div class="containe-m" style="height: 0px; width: 272px; background-color: yellow; margin-left:0px;"> 
 
</div> -->

</body>
 <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src='main.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>