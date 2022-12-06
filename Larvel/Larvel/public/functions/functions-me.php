
<?php 
include('includes/dbConnection.php');//exsiting one: don't change

$dbServerName = "localhost";
$dbUserName  = "root";
$dbPassword = "";
$dbName = "mogadishu_shopping";
$dbc = mysqli_connect( $dbServerName, $dbUserName, $dbPassword, $dbName );


//function session(){
    
    if(!isset($_SESSION['customer_email'])){
        
        echo "<script>window.open('signin-me.php','_self')</script>";
        
    }
}

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}
//Login
    function login_user(){
        global $dbc;
        if(isset($_POST['login'])){
        $email= $_POST['email'];
        $password = $_POST['password'];

        $run_sql = "select * from customer where
        customer_email='$email' and customer_pass='$password'";
        
        $run_qeury = mysqli_query($dbc,$run_sql);
        if ($run_qeury>0){
                if($result_rows=mysqli_fetch_array($run_qeury)>0){

                    $_SESSION['customer_email']=$email;
            
                    echo "<script>alert('You are Logged in')</script>"; 
            
                    echo "<script>window.open('checkout-me.php','_self')</script>";
            }
            else{
                echo "<script> alert('Wrong password')</script>";
            }
        }
        }
    }

    //Register
    function register_user(){
        global $dbc;
        if(isset($_POST['register'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $region= $_POST['region'];
        $district= $_POST['district'];
        $address= $_POST['address'];
        $gender= $_POST['gender'];
        $contact= $_POST['contact'];
        $IP_Address = getRealIpUser();

        $run_sql = "insert into customer (customer_name,customer_email,customer_pass,customer_region,customer_dist,customer_contact,customer_adress,customer_gender,customer_ip) values('$name','$email','$password','$region','$district','$contact','$address','$gender','$IP_Address')";

        $run_qeury = mysqli_query($dbc,$run_sql);
        
        }
    }
    //AddtoCart
    function addtoCart(){
        global $dbc;
        $inStore=0;
        if(isset($_POST['addtoCart'])){
        $product_id= $_GET['product_id'];
        $qty= $_POST['product_quantity'];
        $size= $_POST['product_size'];
        $IP_Address = getRealIpUser();
        
        $inStore = check_stock($product_id);
        echo $inStore;
        if ($inStore >= $qty){
        $run_sql = "insert into cart (p_id,ip_add,qty,size) values('$product_id','$IP_Address','$qty','$size')";

        $run_qeury = mysqli_query($dbc,$run_sql);
       echo "<script>window.open('details-me.php?product_id=$product_id','_self') </script>";

        
        }
        else{
             echo "
             <script> window.alert('This item sold out') </script>
            ";
           
        }
        }
    }


		function count_total_price(){
                global $dbc;
                $total=0;
                $get_cart_item = "select * from cart";
                $run_cart = mysqli_query($dbc,$get_cart_item);
                
                while ( $row_cart=mysqli_fetch_array($run_cart)){
                    $product_id = $row_cart['p_id'];
                    $product_quantity = $row_cart['qty'];
                    $product_size = $row_cart['size'];
                
            
                $get_products = "select * from products where product_id='$product_id'";
                $run_products = mysqli_query($dbc,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_img1 = $row_products['product_img1'];
                    $product_title = $row_products['product_title'];
                    $product_price = $row_products['product_price'];

                    
                
                $sub_total=$product_quantity*$product_price;
                $total +=$sub_total;
	       }
		
	     }
		
		return ($total);
	}

function count_cart_items(){
        global $dbc;
        $get_products = "select count(p_id) from cart" ;
        $run_products = mysqli_query($dbc,$get_products);
                
        while ( $row_products=mysqli_fetch_array($run_products)){
                    return $product_in_cart = $row_products[0];
        } 
}

function prod_cat(){
    include('includes/dbConnection.php');
    $product_cat = "select * from product_categories";
                $run_pr_cat = mysqli_query($conn,$product_cat);
                
                while ( $row_cat=mysqli_fetch_array($run_pr_cat)){
                    $product_titlee = $row_cat['p_cat_title'];
                    $product_catogrory_id = $row_cat['p_cat_id'];
        

                    echo "
                        <li><a href='shop-me.php?p_cat=$product_catogrory_id'> $product_titlee  </a></li>
                    ";
                }
}
function prod_cat_side(){
    include('includes/dbConnection.php');
    $product_cat = "select * from product_categories";
                $run_pr_cat = mysqli_query($conn,$product_cat);
                
                while ( $row_cat=mysqli_fetch_array($run_pr_cat)){
                    $product_titlee = $row_cat['p_cat_title'];
                    $product_catogrory_id = $row_cat['p_cat_id'];
        

                    echo "
                    <li class='styleMeli'><a href='shop-me.php?p_cat=$product_catogrory_id' class='shopStyleLinks'>$product_titlee</a></li>
                    ";
                }
}
 
function show_all_products(){
                include('includes/dbConnection.php');
                $per_page=12; 
                if(!isset($_GET['page'])){
                $page=1;
                $start_from = ($page-1) * $per_page;
                $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                $run_products = mysqli_query($conn,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_id = $row_products['product_id'];
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                    
                    
                    echo "
                    <div class='div5-item-1'>

            <div class='div5-item-1-pic'>
                <a href='details-me.php?product_id=$product_id' method='GET'style='background-color:white'>
                <img src='admin_area/product_images/$product_img1' alt='' style='width: 100%;height: 100%;'> </a>
            </div>
            <p class='aa'> <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white; color:black'>$product_title</a> </p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-o' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='details-me.php?product_id=$product_id' method='GET' class='btn-styling-1'>View Details</a>
             <a href='details-me.php?product_id=$product_id' method='GET'  id='btn-styling-2'> <span class='fa fa-shopping-cart' style='background-color:midnightblue; color:white; '> </span> Add to Cart</a>
        </div>
                    ";
                }
                $get_products = "select * from products";
                $run_products = mysqli_query($conn,$get_products);
                 $total_records = mysqli_num_rows($run_products);         
                $total_pages = ceil($total_records / $per_page);
                echo "
                 <div class='pageRowLimit' style='margin-left:-300px'>
                            <div class='CenterMe'>
                        
                            <li>
                            
                                <a href='shop-me.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='shop-me.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop-me.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                         </div> </div>
                ";


                $page=1;
            }
            else{
                $page = $_GET['page'];
                $start_from = ($page-1) * $per_page;
                $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                $run_products = mysqli_query($conn,$get_products);
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_id = $row_products['product_id'];
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                    
                    
                    echo "
                    <div class='div5-item-1'>

            <div class='div5-item-1-pic'>
                <a href='details-me.php?product_id=$product_id' method='GET'style='background-color:white'>
                <img src='admin_area/product_images/$product_img1' alt='' style='width: 100%;height: 100%;'> </a>
            </div>
            <p class='aa'> <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white; color:black'>$product_title</a> </p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-o' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='#' class='btn-styling-1'>View Details</a>
             <a href=''  id='btn-styling-2'> <span class='fa fa-shopping-cart' style='background-color:midnightblue; color:white; '> </span> Add to Cart</a>
        </div>
                    
                    ";
                }

                 $query = "select * from products";
                             
                    $result = mysqli_query($conn,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                     echo "
                            <div class='pageRowLimit' style='margin-left:-300px'>
                            <div class='CenterMe'>
                        
                            <li>
                            
                                <a href='shop-me.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='shop-me.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop-me.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                         </div> </div>
                        ";
            }
}

function show_user_query_product(){
                include('includes/dbConnection.php');

                if(isset($_GET['p_cat'])){
                $product_catogory_id= $_GET['p_cat'];
                $get_products = "select * from products where p_cat_id='$product_catogory_id'";
                $run_products = mysqli_query($conn,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_id = $row_products['product_id'];
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                    
                    
                    echo "
                    <div class='div5-item-1'>

            <div class='div5-item-1-pic'>
                <a href='details-me.php?product_id=$product_id' method='GET'style='background-color:white'>
                <img src='admin_area/product_images/$product_img1' alt='' style='width: 100%;height: 100%;'> </a>
            </div>
            <p class='aa'> <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white; color:black'>$product_title</a> </p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-o' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='#' class='btn-styling-1'>View Details</a>
             <a href=''  id='btn-styling-2'> <span class='fa fa-shopping-cart' style='background-color:midnightblue; color:white; '> </span> Add to Cart</a>
        </div>
                    ";
                }
            }
}

function profile(){
    global $dbc;
    $customeremail = $_SESSION['customer_email']; 
    $get_products = "select * from customer where customer_email='$customeremail'";
                $run_products = mysqli_query($dbc,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $customer_name = $row_products['customer_name'];
                    $customer_region = $row_products['customer_region'];
                    $customer_district = $row_products['customer_dist'];
                    $customer_contact = $row_products['customer_contact'];
                    $customer_gender = $row_products['customer_gender'];
                    $customer_address = $row_products['customer_adress'];

                    echo "
                        <p style='margin-top:10px;margin-bottom:10px'><strong style='background-color: white;'>Customer Name  </strong> <br>
                $customer_name</p>
                <p><strong style='background-color: white; '>Customer Email  </strong> <br>
                $customeremail</p>
                <p><strong style='background-color: white;'>Customer Region  </strong> <br>
                $customer_region</p>
                <p><strong style='background-color: white;'>Customer District  </strong> <br>
                $customer_district</p>
                <p><strong style='background-color: white;'>Customer Contact  </strong> <br>
                $customer_contact</p>
                <p><strong style='background-color: white;'>Customer Address  </strong> <br>
                $customer_address</p>
                <p><strong style='background-color: white;'>Gender  </strong> <br>
                $customer_gender</p>
                
                    ";
                }
}

function editAccount(){
    global $dbc;
    $customeremail = $_SESSION['customer_email']; 
    $get_products = "select * from customer where customer_email='$customeremail'";
                $run_products = mysqli_query($dbc,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $customer_name = $row_products['customer_name'];
                    $customer_region = $row_products['customer_region'];
                    $customer_district = $row_products['customer_dist'];
                    $customer_contact = $row_products['customer_contact'];
                    $customer_gender = $row_products['customer_gender'];
                    $customer_address = $row_products['customer_adress'];

                    echo "
                        <form action='editaccount-me.php' method='post' style='background-color: white; margin-top:-40px; border:none' id='RegForm' >
            <div style='background-color: white;'> <input type='text'name='name'value='$customer_name' placeholder='$customer_name' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;' > <br>
            <input type='text'name='email'value='$customeremail' placeholder='$customeremail' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;'> <br>
            <input type='text' name='region'value='$customer_region' placeholder='$customer_region' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;'>
            <br>
            <input type='text' name='district'value='$customer_district' placeholder='$customer_district' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;'>
            <br>
            <input type='text' name='contact'value='$customer_contact' placeholder='$customer_contact' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;'> <br>
            <input type='text' name='address'value='$customer_address' placeholder='$customer_address' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;'>
            <select name='gender' id='' style='margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;'>
                <option value='$customer_gender'>$customer_gender</option>
                <option value='male'>Male</option>
                <option value='female'>Female</option>
            </select>
            </div>
            <div style='background-color: white;'> <button style='border:none; padding: 10px; margin-top: 10px;background-color: midnightblue; width: 94%; margin-left: 10px; color: white; margin-bottom: 0px; margin-top: -30px;' type='sumbit' name='register'><span class='fa fa-refresh' style='background-color:midnightblue; color:white'></span> Update Now </button></div> 
            </form>
                    ";
                }
    if(isset($_POST['register'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $region=$_POST['region'];
        $district=$_POST['district'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $make_updates= "update customer set customer_name='$name',customer_email='$email',customer_region='$region',customer_dist='$district',customer_contact='$contact',customer_adress='$address',customer_gender='$gender'where customer_email='$customeremail'";
        $run_products = mysqli_query($dbc,$make_updates);
        echo"
        <div class='alert' style='background-color:#28a745;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  Your profile updated successfully!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>
            ";
        
    }
}

function myOrders(){ 

    echo "

                    <th>NO</th>
                    <th>Due Amount</th>
                    <th>Invoice NO</th>
                    <th>Qty</th>
                    <th>Size</th>
                    <th>Order Date</th>
                    <th>Paid/Unpaid</th>
                    <th>Status</th>
    ";

    global $dbc; //cross-referce database 
    $customeremail = $_SESSION['customer_email'];
    $get_customer = "select customer_id from customer where customer_email='$customeremail'";
    $run_customer = mysqli_query($dbc,$get_customer);
    $customer_id_is =mysqli_fetch_array($run_customer);
     $id = $customer_id_is['customer_id'];
    $get_products = "select * from customer_orders where customer_id='$id'";
                $run_products = mysqli_query($dbc,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $order_id = $row_products['order_id'];
                    $due_amount = $row_products['due_amount'];
                    $invoice_no = $row_products['invoice_no'];
                    $order_date = $row_products['order_date'];
                    $oder_status = $row_products['order_status'];
                    $qty = $row_products['qty'];
                    $size = $row_products['size'];

                    echo "
                     <tr>
                        <td>$order_id</td>
                        <td>$$due_amount</td>
                        <td>$invoice_no</td>
                        <td>$qty</td>
                        <td>$size</td>
                        <td>$order_date</td>
                        <td>$oder_status</td>
                        <td><a href='payment-con-me.php?order_id=$order_id' id='confirm'>Complete Payment</a> </td>
                        </tr>
                     
                    ";
        }
}

function editPassword(){
    global $dbc;
    if(isset($_POST['register'])){
    $passold=$_POST['passold'];
    $passnew2=$_POST['passnew2'];
    $passnew1=$_POST['passnew1'];

    $customeremail = $_SESSION['customer_email']; 
    $get_products = "select * from customer where customer_email='$customeremail'";
    $run_products = mysqli_query($dbc,$get_products);
                
    $row_products=mysqli_fetch_array($run_products);
     $customer_name = $row_products['customer_name'];
    $customer_region = $row_products['customer_region'];
    $customer_pass = $row_products['customer_pass'];
    
    if($passnew1 == $passnew2 && $passold == $customer_pass){
        $make_updates= "update customer set customer_pass='$passnew1'where customer_email='$customeremail'";
        $run_products = mysqli_query($dbc,$make_updates);
        echo "<div class='alert' style='background-color:#28a745;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  Password updated successfully!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>";
    }
    else if($passold != $customer_pass){
        echo "<div class='alert' style='background-color:#f44336;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  You entred wrong password!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>
            ";
    }
    else{
        echo"
        <div class='alert' style='background-color:#f44336;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  Your password didn't match!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>
            ";
    }
    }
            
}

function deleteAccount(){
    global $dbc;
    if(isset($_POST['delete'])){
    $customeremail = $_SESSION['customer_email']; 
    
      //  $exec_deletetion = "delete from customer where customer_email='$customeremail'";
       // $exc_cmnd = mysqli_query($dbc,$exec_deletetion);
    echo"
        <div class='alert' style='background-color:#28a745;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  Your Account is Deleted!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>
            ";
     sleep(3);
    echo" <script>window.open('indexx.php','_self');</script>";

    }
}

function paymentCompletion(){
    global $dbc;
    $id = $_GET['order_id'];
    if(isset($_POST['paid'])){ 
        if(isset($_POST['email']) && ($_POST['name'])&& ($_POST['region'])&& ($_POST['date'])&& ($_POST['gender'])&& ($_POST['password'])){
            $invoice_no=$_POST['name'];
            $amount_sent=$_POST['email'];
            $code=$_POST['region'];
            $date=$_POST['date'];
            $paymentOption=$_POST['gender'];
            $refrenceID=$_POST['password'];

            $customeremail = $_SESSION['customer_email'];
            //check sumtotal so i wont be cheated Hehe :)
            $price = count_total_price(); 
            if($price == $amount_sent ){
                $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values('$invoice_no','$amount_sent','$paymentOption','$refrenceID','$code','$date')";
                $insert_money = mysqli_query($dbc,$insert_payment);
                //mark order status as complete
                $complete = "Complete";
                $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$id'";
                $run_customer_order = mysqli_query($dbc,$update_customer_order);

                echo"
        <div class='alert' style='background-color:#28a745;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  Your Order Will Be Served Within 24!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>
            ";
            sleep(5);
            echo" <script>window.open('payment-con-me.php?order_id=35','_self');</script>
            ";
            }
        }
        else{
            echo"
            <div class='alert' style='background-color:#f44336;'> 
                    <span class='closebtn' onclick='func();'>&times;</span> 
                    Please fill the blank spaces!
                </div>
                <script> function func(){
                let myElement = document.querySelector('.closebtn'); 
                myElement.parentElement.style.display='none'} </script>
                ";
        }
        
}
    
}

function check_stock($product_id){
    global $dbc;
    $get_customerId = "select * from products where product_id='$product_id'";
    
    $get_id = mysqli_query($dbc,$get_customerId );
    while ( $row_products=mysqli_fetch_array($get_id )){
        return $y =$row_products['stock'];
    }
}

function checkout(){
    global $dbc; 
    //get user ip here to get seperate cart items
   // $customeremail = $_SESSION['customer_email'];
   // $get_customer = "select customer_id from customer where customer_email='$customeremail'";
   // $run_customer = mysqli_query($dbc,$get_customer);
   // $customer_id_is =mysqli_fetch_array($run_customer);
    // $id = $customer_id_is['customer_id'];
     if(isset($_POST['pai'])){
    $ip_Address = getRealIpUser();
    $id = 0;
    $get_customerId = "select * from customer where customer_ip='$ip_Address'";
    $get_id = mysqli_query($dbc,$get_customerId );
    while ( $row_products=mysqli_fetch_array($get_id )){
        $id = $row_products['customer_id'];
    }
                
    $get_cart_item = "select * from cart where ip_add='$ip_Address'";
    $run_cart = mysqli_query($dbc,$get_cart_item);

    while ( $row_cart=mysqli_fetch_array($run_cart)){
        $c_id= $row_cart['ip_add'];//fix this
        $product_quantity = $row_cart['qty'];
        $product_size = $row_cart['size'];
        $pr_id= $row_cart['p_id'];
        $price = count_total_price();
        $invoice_no = rand(100000,1000000);

        $mydate=getdate(date("U"));
        $day = $mydate["weekday"];
        $month =$mydate["month"] ;
        $year = $mydate["year"];
        $date = $day.'-'.$month.'-'.$year;
        $status= "pending";

        $insert_pending = "insert into Customer_orders (customer_id,due_amount,invoice_no,qty,size,order_date,order_status) values('$id','$price','$invoice_no','$product_quantity','$product_size','$date','$status')";
        $run_pending = mysqli_query($dbc,$insert_pending);
        
        $delete_cart = "delete from cart where ip_add='$ip_Address'";
        $run_delete = mysqli_query($dbc,$delete_cart);

        $availabe_items = check_stock($pr_id);
        $new_Stock = $availabe_items - $product_quantity;
         $delete_cartt = "update products set stock=$new_Stock where product_id='$pr_id'";
        $run_deletee = mysqli_query($dbc,$delete_cartt);//updating stock

        
                echo"
        <div class='alert' style='background-color:#28a745;'> 
                 <span class='closebtn' onclick='func();'>&times;</span> 
                  Your Order Will Be Served Within 24!
            </div>
            <script> function func(){
            let myElement = document.querySelector('.closebtn'); 
            myElement.parentElement.style.display='none'} </script>
            ";
            sleep(1);
            echo" <script>window.open('indexx.php','_self');</script>
            ";

    }
  } 
  
}

function userQuery(){
                include('includes/dbConnection.php');
                $itemName = $_POST['item'];
                $per_page=12;
                if(!isset($_GET['page'])){
                $page=1;
                $start_from = ($page-1) * $per_page;
                $get_products = "select * from products where product_keyword like '%$itemName%' order by 1 DESC ";
                $run_products = mysqli_query($conn,$get_products);
                
                while ( $row_products=mysqli_fetch_array($run_products)){
                    $product_id = $row_products['product_id'];
                    $product_title = $row_products['product_title'];
                    $product_img1 = $row_products['product_img1'];
                    $product_price = $row_products['product_price'];
                    $stock = $row_products['stock'];
                    if ($stock ==0){
                        $stock = "Sold Out";
                    }
                    
                    echo "
                    <div class='div5-item-1'>
                    <p style='position:absolute; font-size:20px; background-color:midnightblue; color:white; padding-right:5px'>$stock</p>
            <div class='div5-item-1-pic'>
                <a href='details-me.php?product_id=$product_id' method='GET'style='background-color:white'>
                <img src='admin_area/product_images/$product_img1' alt='' style='width: 100%;height: 100%;'> </a>
            </div>
            <p class='aa'> <a href='details-me.php?product_id=$product_id' method='GET' style='background-color:white; color:black'>$product_title</a> </p>
            <p class='aa'>
                <i class='fa fa-star' id=   'icon-bg'> </i>
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star' id=   'icon-bg'> </i> 
                <i class='fa fa-star-half-o' id=   'icon-bg'> </i> 
                <i class='fa fa-star-o' id=   'icon-bg'> </i> 
            </p>
             <p class='aa'> $$product_price</p>
             <a href='details-me.php?product_id=$product_id' method='GET' class='btn-styling-1'>View Details</a>
             <a href='details-me.php?product_id=$product_id' method='GET'  id='btn-styling-2'> <span class='fa fa-shopping-cart' style='background-color:midnightblue; color:white; '> </span> Add to Cart</a>
        </div>
                    ";
        }
            
    }
}

function userQuery_count_products(){
    $itemName = $_POST['item']; 
    include('includes/dbConnection.php');
    $get_products = "select count(product_id) from products where product_keyword like '%$itemName%'";
    $run_products = mysqli_query($conn,$get_products);        
     while ( $row_products=mysqli_fetch_array($run_products)){
                    return $product_in_cart = $row_products[0];
        } 
}

//Only used for testing with ztest-me.php
function a(){
    
}




?>