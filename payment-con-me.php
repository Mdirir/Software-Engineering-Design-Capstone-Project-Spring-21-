<?php 
   include('index-me-header.php');
?>
<style>

/**/
.sideTable{
    width: 500px;
    height:auto;
    background-color: white;
    margin-left: 20px;
    display:inline-block;
    margin-left:430px;
    margin-top:-290px;
}
.sideTable div{
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 10px;
    background-color: white;
}
.sideTable h1,.sideTable p{
    margin-bottom: 10px;
    text-align: center;
    background-color: white;
}
form{
    width: auto;
    height: auto;
    border: 1px solid black;
    background-color: red;

}
.alert {
  padding: 20px;
  color: white;
  text-align:center;
  margin-left:20px;
  margin-right:20px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
  color:white;
}

.closebtn:hover {
  color: black;
}


</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="style-me.css">

</head>
<body>
    <div class="user-side">
    <?php 
    include('aside-me.php');
    ?>
        <!-- side table-->
    <article class="sideTable">
        <div> 
            <h1> Payment Center</h1>
            <hr>
        </div>
        <!--table-->
            <div>
                <form action="payment-con-me.php?order_id=<?php echo $_GET['order_id'];?>" method="post" style="background-color: white; margin-top:-40px; border:none" id="RegForm" >
            <div style="background-color: white;"> <input type="text"name="name" placeholder="Invoice No" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;" > <br>
            <input type="text"name="email" placeholder="Amount Sent: <?php echo count_total_price()?>" value="<?php echo count_total_price()?>" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;"> <br>
            <input type="password"name="password" placeholder="Transaction / Reference ID" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            <br>
            <input type="text" name="region" placeholder="Dahabshill bank/ Priemer Bank / EVCPlus / Western Union Code" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            <input type="date" name="date"  style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
            
            <select name="gender" id="" style="margin-bottom: 10px;padding: 10px;width: 94%; margin-left: 10px; background-color: white;">
                <option value="0">Select Payment Option</option>
                <option value="Dabshiil Bank">Dabshiil Bank</option>
                <option value="EVC-Plus">EVC-Plus</option>
                <option value="Premier Bank">Premier Bank</option>
                <option value="Western Union">Western Union</option>
            </select>
            </div>
            <div style="background-color: white;"> <button style="border:none; padding: 10px; margin-top: 10px;background-color: midnightblue; width: 94%; margin-left: 10px; color: white; margin-bottom: 0px; margin-top: -30px;" type="sumbit" name="paid"><span class="fa fa-paper-plane" style="background-color:midnightblue; color:white"></span> Submit Payment</button></div> 
            <?php paymentCompletion();?>
            </form>
            </div>
           
    </article>
</div>

<!---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function() {
    $("li").click(function() {
        $("li").removeClass("active");
        $(this).addClass("active");
    });
    });
 </script>
</body>
</html>