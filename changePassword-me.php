<?php 
   include('index-me-header.php');
?>
<style>

/**/
.sideTable{
    width: 300px;
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="style-me.css">
<body>

<div class="user-side">
     <?php 
    include('aside-me.php');
    ?>
        <!-- side table-->
    <article class="sideTable">
        <div> 
            <h1> Change Your Password</h1>
            <hr>
        </div>
        <!--table-->
            <div>
                <form action="changepassword-me.php" method="post" style="background-color: white; margin-top:-40px; border:none;" id="RegForm" >
            <div style="background-color: white; margin-right: 20px;"> <input type="text"name="passold" placeholder="Please Enter Your Old Password" style="margin-bottom: 10px;padding: 10px;width: 100%; margin-left: 10px; background-color: white;" > <br>
            <input type="text"name="passnew1" placeholder="Please Enter Your New Password" style="margin-bottom: 10px;padding: 10px;width: 100%; margin-left: 10px; background-color: white;"> <br>
            <input type="text"name="passnew2" placeholder="Repeat Your Password Again" style="margin-bottom: 10px;padding: 10px;width: 100%; margin-left: 10px; background-color: white;">
            <br>
            </div>
            <div style="background-color: white;"> <button style="border:none; padding: 13px; margin-top: 10px;background-color: midnightblue; width: 91%; margin-left: 10px; color: white; margin-bottom: 20px; margin-top: -30px;" type="sumbit" name="register"><span class="fa fa-refresh" style="background-color:midnightblue; color:white"></span> Update Now</button></div>
            <?php editPassword();?>
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