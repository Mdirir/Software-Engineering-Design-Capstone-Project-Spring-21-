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
    display:block;
    margin-left:430px;
    margin-top:-310px;
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
            <h1> Edit Your Account</h1>
            <hr>
        </div>
        <!--table-->
            <div>
               <?php editAccount();?>
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