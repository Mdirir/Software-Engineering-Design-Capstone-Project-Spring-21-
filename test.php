
 <?php 
        include('includes/dbConnection.php');

        $product_id = $_GET['addcart'];
        $product_size = $_POST['product_size'];
        $product_quantity=$_POST['product_quantity'];
        
         $add_cart = "insert into cart (p_id,size,qty) values ('$product_id','$product_size', '$product_quantity')";
         $exc_adding = mysqli_query($conn,$add_cart);
        
         echo "<script>window.open('details-me.php?product_id=$product_id','_self')</script>";

?>  