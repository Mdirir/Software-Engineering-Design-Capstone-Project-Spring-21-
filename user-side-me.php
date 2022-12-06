<?php 
   include('index-me-header.php');
?>
<style>

/**/
.sideTable{
    width: 840px;
    height:auto;
    background-color: white;
    margin-left: 430px;
    margin-top:-310px;
    padding-bottom:20px;
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
table{
    width: auto;
    height: auto;
    background-color: white;
    margin-right: 10px;
    margin-bottom: 20px;
}
th,td{
    border-collapse: collapse;
}
td{
    padding:10px
}
#confirm{
    background-color: midnightblue;
    color: white;
    padding: 10px;
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
            <h1> My Orders</h1>
            <p style="font-size: 20px;"> You orders are here</p>
            <p>if you have any qustions, feel free to <span><a href="#" style="color:midnightblue;">Contacts Us</a> </span>. Our Customer Service work 24/7 </p>
            <hr>
        </div>
        <!--table-->
            <table >
            <?php myOrders();?>  
            </table>
    </article>
</div>

<!---->
</body>