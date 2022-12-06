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
.sideTable form{
    width: auto;
    height: auto;
    background-color: white;

}
.sideTable .style-delete-account a{
    margin-left:30px;
    padding:10px;
    width:200px;
    display:inline-block;
}
.sideTable form{
    margin-bottom:20px;
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
            <h1> Delete Account</h1>
            <hr>
        </div>
        <!--table-->
            <div class="style-delete-account" >
                <form action="deleteaccount-me.php" method="post"> <button style="border:none;border-radius:0px;  background-color: #d9534f;color: white; padding:11px; width:200px; font-size:16px; margin-left:20px" name="delete" type="submit"> &#128557; Yes, delete it now </button> 
                <a href="indexx.php" style="background-color:midnightblue; color:white">&#128525; No, take me back</a>
                <?php deleteAccount();?>
                </form>
                 
            </div>
           
    </article>
</div>

</body>