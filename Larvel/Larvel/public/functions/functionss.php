<?php 

$db = mysqli_connect("localhost","root","","mogadishu_shopping");

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// begin add_cart functions ///

function add_cart(){
    
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = $_POST['product_qty'];
        
        $product_size = $_POST['product_size'];
        
        $pro_title = $_POST['product_title'];
        
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('You already have this item on your cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}

/// finish add_cart functions ///

/// finish getRealIpUser functions ///



/// begin getPro functions ///

function getPro(){
    
    global $db;
    
    if(!isset($_GET['p_cat'])){
                            
    if(!isset($_GET['m_cat'])){
                            
     $per_page=6; 
                             
    if(isset($_GET['page'])){
                                
        $page = $_GET['page'];
                                
              }else{
                                
         $page=1;
                                
            }
                            
     $start_from = ($page-1) * $per_page;
    
    $get_products = "select * from products order by 1 DESC LIMIT 24,24";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                  <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='width: 258px; height: 254px'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-half-o'></i>
                       <i class='fa fa-star-o'></i><br>
                    
                        $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn' style='color: #fff; background: midnightblue' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
                         }
    }
}

/// finish getPro functions ///

/// begin getPCats functions ///

function getPCats(){
    
    global $db;
    
    $get_p_cats = "select * from product_categories";
    
    $run_p_cats = mysqli_query($db,$get_p_cats);
    
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
        $p_cat_id = $row_p_cats['p_cat_id'];
        
        $p_cat_title = $row_p_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='shop.php?p_cat=$p_cat_id' style='color: #000;'> $p_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getPCats functions ///

/// begin getmenCats functions ///

function getmenCats(){
    
    global $db;
    
    $get_m_cats = "select * from men_categories";
    
    $run_m_cats = mysqli_query($db,$get_m_cats);
    
    while($row_m_cats=mysqli_fetch_array($run_m_cats)){
        
        $m_cat_id = $row_m_cats['m_cat_id'];
        
        $m_cat_title = $row_m_cats['m_cat_title'];
        
        echo "
        
           
            
                <a href='shop.php?m_cat=$m_cat_id'> $m_cat_title </a>
            
           
        
        ";
        
    }
    
}
    
/// finish getmenCats functions ///


/// begin getladiesCats functions ///

function getladiesCats(){
    
    global $db;
    
    $get_w_cats = "select * from women_categories";
    
    $run_w_cats = mysqli_query($db,$get_w_cats);
    
    while($row_w_cats=mysqli_fetch_array($run_w_cats)){
        
        $w_cat_id = $row_w_cats['w_cat_id'];
        
        $w_cat_title = $row_w_cats['w_cat_title'];
        
        echo "
        
           
            
                <a href='shop.php?w_cat=$w_cat_id'> $w_cat_title </a>
            
           
        
        ";
        
    }
    
}
    
/// finish getladiesCats functions ///



/// begin getkiddCats functions ///

function getkidCats(){
    
    global $db;
    
    $get_k_cats = "select * from  kid_categories";
    
    $run_k_cats = mysqli_query($db,$get_k_cats);
    
    while($row_k_cats=mysqli_fetch_array($run_k_cats)){
        
        $k_cat_id = $row_k_cats['k_cat_id'];
        
        $k_cat_title = $row_k_cats['k_cat_title'];
        
        echo "
        
           
            
                <a href='shop.php?k_cat=$k_cat_id'> $k_cat_title </a>
            
           
        
        ";
        
    }
    
}
    
/// finish getkidsCats functions ///


/// begin getPCan functions ///

function getPCan(){
    
    global $db;
    
    $get_p_cats = "select * from product_categories";
    
    $run_p_cats = mysqli_query($db,$get_p_cats);
    
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
        $p_cat_id = $row_p_cats['p_cat_id'];
        
        $p_cat_title = $row_p_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='index.php?p_cat=$p_cat_id'> Sort By $p_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getPCan functions ///

/// begin getCats functions ///

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo "
        
            <li>
            
                <a href='shop.php?cat=$cat_id' style='color: #555; font-weight: bold'> $cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getCats functions ///

/// begin getpcatpro functions ///

function getpcatpro(){
    
       global $db;
    
       if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
        
                
                    <h1> $p_cat_title </h1>
                    
                    <p> $p_cat_desc </p>
                
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='width: 255px; height: 254px'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-half-o'></i>
                       <i class='fa fa-star-o'></i><br>
                    
                         $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn' style='color: #fff; background: midnightblue' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getmcatpro functions ///

function getmcatpro(){
    
       global $db;
    
       if(isset($_GET['m_cat'])){
        
        $m_cat_id = $_GET['m_cat'];
        
        $get_m_cat ="select * from men_categories where m_cat_id='$m_cat_id'";
        
        $run_m_cat = mysqli_query($db,$get_m_cat);
        
        $row_m_cat = mysqli_fetch_array($run_m_cat);
        
        $m_cat_title = $row_m_cat['m_cat_title'];
        
        $m_cat_desc = $row_m_cat['m_cat_desc'];
        
        $get_products ="select * from products where m_cat_id='$m_cat_id' and left(product_keyword, 3) ='men'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
        
                
                    <h1> Men $m_cat_title </h1>
                    
                    <p> $m_cat_desc </p>
                
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                  <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='width: 255px; height: 254px'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-half-o'></i>
                       <i class='fa fa-star-o'></i><br>
                    
                         $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn' style='color: #fff; background: midnightblue' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getmcatpro functions ///

/// begin getlcatpro functions ///

function getlcatpro(){
    
       global $db;
    
       if(isset($_GET['w_cat'])){
        
        $w_cat_id = $_GET['w_cat'];
        
        $get_w_cat ="select * from women_categories where w_cat_id='$w_cat_id'";
        
        $run_w_cat = mysqli_query($db,$get_w_cat);
        
        $row_w_cat = mysqli_fetch_array($run_w_cat);
        
        $w_cat_title = $row_w_cat['w_cat_title'];
        
        $w_cat_desc = $row_w_cat['w_cat_desc'];
        
        $get_products ="select * from products where w_cat_id='$w_cat_id' and left(product_keyword, 6) ='ladies'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
        
                
                    <h1> Ladies $w_cat_title </h1>
                    
                    <p> $w_cat_desc </p>
                
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='width: 255px; height: 254px'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-half-o'></i>
                       <i class='fa fa-star-o'></i><br>
                    
                         $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn' style='color: #fff; background: midnightblue' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getlcatpro functions ///

/// begin getkcatpro functions ///

function getkcatpro(){
    
       global $db;
    
       if(isset($_GET['k_cat'])){
        
        $k_cat_id = $_GET['k_cat'];
        
        $get_k_cat ="select * from kid_categories where k_cat_id='$k_cat_id'";
        
        $run_k_cat = mysqli_query($db,$get_k_cat);
        
        $row_k_cat = mysqli_fetch_array($run_k_cat);
        
        $k_cat_title = $row_k_cat['k_cat_title'];
        
        $k_cat_desc = $row_k_cat['k_cat_desc'];
        
        $get_products ="select * from products where k_cat_id='$k_cat_id' and left(product_keyword, 3) ='kid'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
        
                
                    <h1> Kids $k_cat_title </h1>
                    
                    <p> $k_cat_desc </p>
                
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                     <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='width: 255px; height: 254px'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-half-o'></i>
                       <i class='fa fa-star-o'></i><br>
                    
                         $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn' style='color: #fff; background: midnightblue' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getkcatpro functions ///


/// begin getcatpro functions ///

function getcatpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products where cat_id='$cat_id'";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $cat_title </h1>
                    
                    <p> $cat_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                    <div class='product'>
                                        
                        <a href='details.php?pro_id=$pro_id'>
                                            
                          <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='width: 255px; height: 254px'>
                                            
                        </a>
                                            
                        <div class='text'>
                                            
                            <h3>
                                                
                                <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                            </h3>
                                            
                        <p class='price'>
                        
                         <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-half-o'></i>
                       <i class='fa fa-star-o'></i><br>

                            $ $pro_price

                        </p>

                            <p class='buttons'>

                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                View Details

                                </a>

                                <a class='btn' style='color: #fff; background: midnightblue' href='details.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'></i> Add To Cart

                                </a>

                            </p>
                                            
                        </div>
                                        
                    </div>
                                    
                </div>
            
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///




/// finish getRealIpUser functions ///
function items(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "select * from cart where ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from cart where ip_add='$ip_add'";
    
    $run_cart = mysqli_query($db,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['p_id'];
        
        $pro_qty = $record['qty'];
        
        $get_price = "select * from products where product_id='$pro_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['product_price']*$pro_qty;
            
            $total += $sub_total;
            
        }
        
    }
    
    echo " $" . $total;
    
}

/// finish total_price functions ///

?>

