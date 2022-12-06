
<?php 
include('includes/dbConnection.php');//exsiting one: don't change

$dbServerName = "localhost";
$dbUserName  = "root";
$dbPassword = "";
$dbName = "mogadishu_shopping";
$dbc = mysqli_connect( $dbServerName, $dbUserName, $dbPassword, $dbName );

function product_count(){
    global $dbc;
    $get_products = "select count(product_id) from products";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
            return $product_in_cart = $row_products[0];
        } 
}

function customer_count(){
    global $dbc;
    $get_products = "select count(customer_id) from customer";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
            return $product_in_cart = $row_products[0];
        } 
}

function pCatagories_count(){
    global $dbc;
    $get_products = "select count(p_cat_id) from product_categories";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
            return $product_in_cart = $row_products[0];
        } 
}

function order_count(){
    global $dbc;
    $get_products = "select count(order_id) from customer_orders";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
            return $product_in_cart = $row_products[0];
        } 
}

function show_orders(){
    global $dbc;
    $get_products = "select * from customer_orders LIMIT 3";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $order_id = $row_products['order_id'];
        $order_amount = $row_products['due_amount'];
        $invoice_no = $row_products['invoice_no'];
        $qty = $row_products['qty'];
        $size = $row_products['size'];
        $order_status = $row_products['order_status'];

        $get_productss = "select  * from pending_order ";
        $run_productss = mysqli_query($dbc,$get_productss);        
        while ( $row_productss=mysqli_fetch_array($run_productss)){
            $product_id = $row_productss['product_id'];
            $customer_id = $row_productss['customer_id'];

            $get_productsss = "select customer_email from customer where customer_id='$customer_id'";
            $run_productsss = mysqli_query($dbc,$get_productsss);        
            while ( $row_productsss=mysqli_fetch_array($run_productsss)){
                $email= $row_productsss['customer_email'];

                  $get_productssss = "select product_title from products where product_id='$product_id'";
            $run_productssss = mysqli_query($dbc,$get_productssss);        
            while ( $row_productssss=mysqli_fetch_array($run_productssss)){
                $product_title= $row_productssss['product_title'];
        ##fix E-mail

            echo "
            <tr>
        <th scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$order_id</th>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$email</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'> $invoice_no</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$product_id</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$product_title</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$qty</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$size</td>
        <td>$order_status</td>
        </tr>
            ";
        }}}}
}

function show_adminInfo(){
    global $dbc;
    $load_email= $_SESSION['admin_email'];; //fix this via session
    $get_products = "select * from admins where admin_email='$load_email'";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $admin_name = $row_products['admin_name'];
        $admin_about = $row_products['admin_about'];
        $admin_email = $row_products['admin_email'];
        $admin_country = $row_products['admin_country'];
        $admin_image = $row_products['admin_image'];
        $admin_job = $row_products['admin_job'];
        $admin_contact = $row_products['admin_contact'];

        echo "
        <h2 class='ps-2 pe-2' style='margin-top:85%; position:absolute;  background: #000; color:white;'>$admin_name</h2>
          <h5 class='ps-2 pe-2' style='margin-top:95%; position:absolute;  background: white; color:black;'>$admin_job</h5>
          <img src='./admin_images/$admin_image' class='card-img-top' alt='' style='height: 350px;'>
         <div class='card-body'> 
         <p class='card-text'>Email : $admin_email </p>
         <p class='card-text'>Country : $admin_country</p>
         <p class='card-text'>Contact : $admin_contact</p> <hr>
         <p class='card-text'>About me : $admin_about</p> 
        ";
     }
}

function view_products(){
    global $dbc;
    $get_products = "select * from products";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $product_id = $row_products['product_id'];
        $product_title = $row_products['product_title']; 
        $product_image = $row_products['product_img1'];
        $product_price = $row_products['product_price'];
        $product_inStock = $row_products['p_cat_id'];
        $product_keywords = $row_products['product_keyword'];
        $product_date = $row_products['date'];

        echo "
        <tr >
      <th scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); text-align:center; line-height:120px'>$product_id</th>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$product_title</td>
      <td style=' width:6.5%; border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); padding:3px' > <img src='product_images/$product_image' alt='' style='height: 130px; background-color: red; width: 100%;'></td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$product_price</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$product_inStock fix</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$product_keywords</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$product_date</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'> <a href='EditProducts.php?del_product=$product_id' class=' link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete</a> </td>
      <td style='text-align:center; line-height:120px'>  <a href='EditProducts.php?edit_product=$product_id' class=' link link-dark text-decoration-none'> <i class='fa fa-edit'></i> Edit</a> </td>
      
    </tr>
        ";
     }
}

function view_Payments(){
    global $dbc;
    $get_products = "select * from payments";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $id = $row_products['payment_id'];
        $amount = $row_products['amount'];
        $invoice = $row_products['invoice_no'];
        $ref_no = $row_products['ref_no'];
        $code = $row_products['code'];
        $date = $row_products['payment_date'];
        $method= $row_products['payment_mode'];

        echo "
         <tr >
      <th scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); text-align:center; line-height:50px'>$id</th>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$invoice</td>
      
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$amount</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$method</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$ref_no</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$code</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$date</td>
      <td style='text-align:center; line-height:50px'><a href='veiwpayments.php?del_payment=$id' class=' link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete</a></td>
    </tr>
        ";
       
     }
}

function view_productCatagory(){
    global $dbc;
    $get_products = "select * from product_categories";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $p_cat_id = $row_products['p_cat_id'];
        $p_cat_title = $row_products['p_cat_title']; 
        $p_cat_desc = $row_products['p_cat_desc'];
        
        echo "
        <tr >
      <td scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); text-align:center; line-height:50px'>$p_cat_id</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$p_cat_title</td>
      
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$p_cat_desc</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'> <a href='editProductCatagory.php?del_p_cat_id=$p_cat_id' class='link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete</a></td>
      <td style='text-align:center; line-height:50px'>  <a href='editProductCatagory.php?p_cat_id=$p_cat_id' class='link link-dark text-decoration-none'> <i class='fa fa-edit'></i> Edit</a>  </td>
        ";
     }
}

function view_catagory(){
    global $dbc;
    $get_products = "select * from categories";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $cat_id = $row_products['cat_id'];
        $cat_title = $row_products['cat_title']; 
        $cat_desc = $row_products['cat_desc'];

        echo "
        <tr >
      <td scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); text-align:center; line-height:50px'>$cat_id</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$cat_title</td>
      
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'>$cat_desc</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:50px'> <a href='editCategory.php?edit_cat=$cat_id' class='link link-dark text-decoration-none'> <i class='fa fa-edit'></i> Edit </a></td>
      <td style='text-align:center; line-height:50px'><a href='editCategory.php?del_cat=$cat_id' class='link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete </a></td>
    </tr>
        ";
     }
}

function view_slides(){
    global $dbc;
    $get_products = "select * from slider";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $slide_id = $row_products['slide_id'];
        $slide_name = $row_products['slide_name']; 
        $slide_images = $row_products['slide_images'];

        echo "
        <div class='col-sm-3 pt-2 ms-4 mb-4 me-4' style='float:left; background-color: #337ab7; width: 348px;' > <!--fix me-->
      <p style='text-align: center;' class='mt-2 p-1'>  <span style='color:white; line-height: 0px; '>$slide_name</span> </p>
        <div style='background-color: white;'>
        <img class='p-2' src='slides_images/$slide_images' alt='' style='height: 200px;background-color: rsed; width: 100%; border-left:1px solid #337ab7; border-right:1px solid #337ab7;'>
      </div>
      <div style='border: 1px solid #337ab7;'>
        <a href='EditSlide.php?slide_name=$slide_id' class='bg-light link-light link text-decoration-none p-2 ' style=' display:inline-block; color: #337ab7;  width: 50%;'> <i class='fa fa-edit' style='margin-right:5px'></i> Edit </a>
        <a href='EditSlide.php?del_slide_name=$slide_id' class='bg-light link-light link text-decoration-none p-2' style=' display:inline-block; color: #337ab7;  width: 50%; float: right; text-align: end;'>  Delete <i class='fa fa-trash' style='margin-right:5px'></i></a>
        </div>
     </div>
        ";
     }
}

function view_customer(){
    global $dbc;
    $get_products = "select * from customer";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $no = $row_products['customer_id'];
        $name = $row_products['customer_name']; 
        $email = $row_products['customer_email'];
        $region = $row_products['customer_region'];
        $district = $row_products['customer_dist'];
        $address = $row_products['customer_adress'];
        $contact = $row_products['customer_contact'];
        
        echo "
        <tr >
      <td scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); text-align:center; line-height:120px'>$no</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$name</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$email</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$region</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$district</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$address</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:120px'>$contact</td>
      <td style='text-align:center; line-height:120px'><a href='editCategory.php?cus_id=$no' class='link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete </a></td> 
    </tr>
        ";
     }
}

function view_all_orders(){
    global $dbc;
    $get_products = "select * from customer_orders";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $order_id = $row_products['order_id'];
        $due_amount = $row_products['due_amount'];
        $invoice_no = $row_products['invoice_no'];
        $qty = $row_products['qty'];
        $size = $row_products['size'];
        $order_status = $row_products['order_status'];
        $order_date = $row_products['order_date'];

        $get_productss = "select  * from pending_order ";
        $run_productss = mysqli_query($dbc,$get_productss);        
        while ( $row_productss=mysqli_fetch_array($run_productss)){
            $product_id = $row_productss['product_id'];
            $customer_id = $row_productss['customer_id'];

            $get_productsss = "select customer_email from customer where customer_id='$customer_id'";
            $run_productsss = mysqli_query($dbc,$get_productsss);        
            while ( $row_productsss=mysqli_fetch_array($run_productsss)){
                $email= $row_productsss['customer_email'];

                  $get_productssss = "select product_title from products where product_id='$product_id'";
            $run_productssss = mysqli_query($dbc,$get_productssss);        
            while ( $row_productssss=mysqli_fetch_array($run_productssss)){
                $product_title= $row_productssss['product_title'];
        ##fix E-mail

            echo "
            <tr>
        <th scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'> $order_id</th>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$email</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'> $invoice_no</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$product_title</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$qty</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$size</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$order_date</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$due_amount</td>
        <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);'>$order_status</td>
        <td style='text-align:center; line-height:50px;'><a href='veiworders.php?del_order=$order_id' class='link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete </a></td>
        </tr>
            ";
        }}}}
}

function view_user(){
    global $dbc;
    $get_products = "select * from admins";
    $run_products = mysqli_query($dbc,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
        $no = $row_products['admin_id'];
        $name = $row_products['admin_name'];
        $email = $row_products['admin_email'];
        $img = $row_products['admin_image'];
        $country = $row_products['admin_country'];
        $about = $row_products['admin_about'];
        $contact = $row_products['admin_contact'];
        $job = $row_products['admin_job'];

        echo"
        <tr >
      <th scope='row'style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); text-align:center; line-height:80px'>$no</th>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:80px'>$name</td>
      <td style=' width:6.5%; border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125); padding:3px' > <img src='./admin_images/$img' alt='' style='height: 90px; background-color: red; width: 100%;'></td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:80px'>$email</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:80px'>$country</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:80px'>$job</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:80px'>$contact</td>
      <td style='border-collapse: collapse; border-right:1px solid rgba(0,0,0,.125);text-align:center; line-height:80px'> <a href='veiwuser.php?del_id=$no' class=' link link-dark text-decoration-none'> <i class='fa fa-trash'></i> Delete</a></td>
      <td style='text-align:center; line-height:80px'> <a href='Edituser.php?id=$no' class=' link link-dark text-decoration-none'> <i class='fa fa-edit'></i> Edit</a> </td>
    </tr>
        ";
     }
}


#####################################   EDIT STARTS   ##################################

function edit_categories(){
    if(isset($_POST['update'])){
        global $dbc;
        $cat_id=$_GET['edit_cat'];
        $cat_name=$_POST['title'];
        $cat_desc=$_POST['about'];
        $insert_cat = "update categories set cat_title='$cat_name', cat_desc='$cat_desc' where cat_id='$cat_id'";
        $insert_catagory = mysqli_query($dbc,$insert_cat);
    }
}

function edit_product_categories(){
    if(isset($_POST['update'])){
        global $dbc;
        $p_cat_id=$_GET['p_cat_id'];
        $p_cat_name=$_POST['title'];
        $p_cat_desc=$_POST['about'];
        $insert_cat = "update product_categories set p_cat_title='$p_cat_name', p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
        $insert_catagory = mysqli_query($dbc,$insert_cat);
    }
}

function edit_product_items(){
    if(isset($_POST['update'])){
    global $dbc;
    //find procat and catid
    $p_cat_id = 0;
    $product_cat = $_POST['options-outlined'];
    $get_products = "select * from product_categories where p_cat_title='$product_cat'";
    $run_products = mysqli_query($dbc,$get_products);        
    while ( $row_products=mysqli_fetch_array($run_products)){
        $p_cat_id=$row_products['p_cat_id'];
    }
    $cat_id=0;
    $cat = $_POST['a'];
     $get_productss = "select * from categories where cat_title='$cat'";
    $run_productss = mysqli_query($dbc,$get_productss);        
    while ( $row_productss=mysqli_fetch_array($run_productss)){
        $cat_id=$row_productss['cat_id'];//
    }
    $p_id = $_GET['edit_product'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $keyword = $_POST['keyword'];
    $desc = $_POST['desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $update_product = "update products set p_cat_id='$p_cat_id',cat_id='$cat_id',date=NOW(),product_title='$title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_keyword='$keyword',product_desc='$desc',product_price='$price' where product_id='$p_id'";

   $run_product = mysqli_query($dbc,$update_product);
}
}

function edit_admins(){
if(isset($_POST['update'])){
    global $dbc;
    $admin_id = $_GET['id'];
    $admin_name =$_POST['username'];
    $pass =$_POST['password'];
    $admin_about =$_POST['about'];
    $admin_email =$_POST['email'];
    $admin_country =$_POST['country'];
    $admin_job =$_POST['job'];
    $admin_contact =$_POST['contact'];

    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"admin_images/$product_img1");

    $update_admin = "update admins set admin_name='$admin_name', admin_email='$admin_email', admin_pass='$pass', admin_country='$admin_country', admin_about='$admin_about', admin_contact='$admin_contact', admin_job='$admin_job' ,admin_image='$product_img1' where admin_id='$admin_id'";
    
    $run_admin = mysqli_query($dbc,$update_admin);
}
}
#####################################   INSERT STARTS   ##################################
function insert_Users(){
if(isset($_POST['insertUser'])){
    global $dbc;
    $admin_name =$_POST['username'];
    $pass =$_POST['password'];
    $admin_about =$_POST['about'];
    $admin_email =$_POST['email'];
    $admin_country =$_POST['country'];
    $admin_job =$_POST['job'];
    $admin_contact =$_POST['contact'];

    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"admin_images/$product_img1");

    $update_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_country,admin_about,admin_contact,admin_job, admin_image) values('$admin_name', '$admin_email', '$pass', '$admin_country', '$admin_about', '$admin_contact', '$admin_job' ,'$product_img1')";
    
    $run_admin = mysqli_query($dbc,$update_admin);
}
}

function insert_Product(){
    if(isset($_POST['insertProduct'])){
    global $dbc;
    $p_title = $_POST['title'];
    $p_cat = $_POST['options-outlined'];
    $m_cat = $_POST['a'];
    $l_cat = $_POST['b'];
    $k_cat = $_POST['d'];
    $cat = $_POST['c'];
    $price = $_POST['price'];
    $keywords = $_POST['keywords'];
    $desc = $_POST['desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name']; ////fix it tomorrow, echo price and the rest
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $mydate=getdate(date("U"));
    $day = $mydate["weekday"];
    $month =$mydate["month"] ;
    $year = $mydate["year"];
    $date = $day.'-'.$month.'-'.$year;
    
    
    $update_product = "insert into products (m_cat_id,w_cat_id,k_cat_id,cat_id,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword) values('$m_cat' ,'$l_cat' ,'$k_cat' ,'$cat' ,'$p_title' ,'$product_img1' ,'$product_img2' ,'$product_img3' ,'$price' ,'$desc' ,'$keywords')";

   $run_product = mysqli_query($dbc,$update_product);
}
}

function edit_Slide(){
    if(isset($_POST['updateSlide'])){
    global $dbc;
    $slide_id = $_GET['slide_name'];

    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"slides_images/$product_img1");

    $update_product ="update slider set slide_images='$product_img1' where slide_id='$slide_id'";
    $run_product = mysqli_query($dbc,$update_product);
    }
}

function insert_SlideImage(){
    if(isset($_POST['insertSlide'])){
    global $dbc;
    $slide = $_POST['slide_name'];
    $product_img1 = $_FILES['product_img1']['name'];
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    move_uploaded_file($temp_name1,"slides_images/$product_img1");

    //check if slides has more than 5 slides
    $slides_available=0;
    $get_productss = "select count(slide_id) from slider";
    $run_productss = mysqli_query($dbc,$get_productss);        
     while ( $row_productss=mysqli_fetch_array($run_productss)){
            $slides_available = $row_productss[0];
        }
    
     if($slides_available<5){
        $update_product ="insert into slider (slide_name,slide_images) values('$slide','$product_img1')";
        $run_product = mysqli_query($dbc,$update_product); 
    }
    else{
         $update_product ="update slider set slide_images='$product_img1' where slide_id=6";
        $run_product = mysqli_query($dbc,$update_product);
    } 
    
    }
}

function insert_ProductCategory(){
    if(isset($_POST['insertPCategory'])){
    global $dbc;
    $name=$_POST['title'];
    $about=$_POST['about'];

    $update_product ="insert into product_categories (p_cat_title,p_cat_desc) values('$name','$about')";
    $run_product = mysqli_query($dbc,$update_product); 
    }
}

function insert_Category(){
    if(isset($_POST['insertCategory'])){
    global $dbc;
    $name=$_POST['title'];
    $about=$_POST['about'];

    $update_product ="insert into categories (cat_title,cat_desc) values('$name','$about')";
    $run_product = mysqli_query($dbc,$update_product); 
    }
}

function editUserprofile(){
if(isset($_POST['update'])){
    global $dbc;
    $admin_id = $_SESSION['admin_email'];
    $admin_name =$_POST['username'];
    $pass =$_POST['password'];
    $admin_about =$_POST['about'];
    $admin_email =$_POST['email'];
    $admin_country =$_POST['country'];
    $admin_job =$_POST['job'];
    $admin_contact =$_POST['contact'];

    $product_img1 = $_FILES['product_img1']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    
    move_uploaded_file($temp_name1,"admin_images/$product_img1");

    $update_admin = "update admins set admin_name='$admin_name', admin_email='$admin_email', admin_pass='$pass', admin_country='$admin_country', admin_about='$admin_about', admin_contact='$admin_contact', admin_job='$admin_job' ,admin_image='$product_img1' where admin_email='$admin_id'";
    
    $run_admin = mysqli_query($dbc,$update_admin);
}
}

#####################################   EDIT Ends   ##################################
  function login_admin(){
        global $dbc;
        if(isset($_POST['loginAdmin'])){
        $username= $_POST['username'];
        $password = $_POST['password'];
        $run_sql = "select * from admins where
        admin_email='$username' and admin_pass='$password'";
        
        $run_qeury = mysqli_query($dbc,$run_sql);
        //echo "y o" +$run_qeury; 
        
            if($result_rows=mysqli_fetch_array($run_qeury)>0){
                session_start();
                $_SESSION['admin_email']=$username;
            
                echo "<script>window.alert('You are Logged in')</script>"; 
            
                echo "<script>window.open('dashboard.php','_self')</script>";
            }
            else{
                echo "<script> alert('Wrong password')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }  
        }
}


/////////////////////////////// DELete product ///////////////////////

//Delete from products
if(isset($_GET['del_product'])){
    $id = $_GET['del_product'];
    
    $update_admin = "delete from products where product_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('viewProducts.php','_self')</script>";

}

//delete product categories
if(isset($_GET['del_p_cat_id'])){
    $id = $_GET['del_p_cat_id'];
    
    $update_admin = "delete from product_categories where p_cat_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('viewProductCatagories.php','_self')</script>";

}

//delete categories
if(isset($_GET['del_cat'])){
    $id = $_GET['del_cat'];
    
    $update_admin = "delete from categories where cat_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('ViewCategories.php','_self')</script>";

}


/**///delete categories
if(isset($_GET['del_slide_name'])){
    $id = $_GET['del_slide_name'];
    
    $update_admin = "delete from slider where slide_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('viewSlides.php','_self')</script>";

}

////delete customer if he's hella stupid
if(isset($_GET['cus_id'])){
    $id = $_GET['cus_id'];
    
    $update_admin = "delete from customers where customer_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('viewSlides.php','_self')</script>";

}

//delete order from view orders caus 'you can'
if(isset($_GET['del_order'])){
    $id = $_GET['del_order'];
    
    $update_admin = "delete from customer_orders where order_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('veiworders.php','_self')</script>";

}

//delete sus payments
if(isset($_GET['del_payment'])){
    $id = $_GET['del_payment'];
    
    $update_admin = "delete from payments where payment_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('veiwpayments.php','_self')</script>";

}
//delte admins users
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    
    $update_admin = "delete from admins where admin_id='$id'";
    $run_admin = mysqli_query($dbc,$update_admin);
   echo "<script>window.open('veiwuser.php','_self')</script>";

}

/////////////////////////////////////////////

function session(){
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $actual_link;
    if($actual_link === "http://localhost:8012/p/a/login.php"){
        //pass through
    }else if(!isset($_SESSION['admin_email'])){
        echo "hhhhhhhhhhhhhh";
        echo $_SESSION['admin_email'];
        
        echo "<script>window.open('login.php','_self')</script>";
    }//else{
       // echo "<script>window.open('index.php','_self')</script>";
    //}
}

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}
    //Register
   



?>