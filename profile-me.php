<?php 
   include('index-me-header.php');
?>
<style>


/**/
.sideTable{
    width: 500px;
    height:auto;
    background-color: white;
    margin-left: 430px;
    display:block;
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
            <h1>Profile Info</h1>
            <hr>
        </div>
        <!--table-->
            <div>
                <?php profile();?>

            </div>
           
    </article>
</div>

<!---->

</body>