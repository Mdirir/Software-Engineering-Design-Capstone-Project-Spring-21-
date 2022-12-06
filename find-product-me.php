<?php 
    include("index-me-header.php");  
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style-me.css">
<style>
.itemresult{
    width: 1155px;
    height: auto;
    margin-left: 410px;
    background-color: #e7e7e7;
    margin-top: 20px;
    margin-bottom: 20px;
}
.zzyzyz{
    text-align: center;
    background-color: #e7e7e7;
    margin: 20px 0px;
   
}
.pageRowLimit .Centerme{
   width:auto;
   margin-left:600px;
   
}
</style>

<body>
    <div class="itemresult">
        <h2 class="zzyzyz">Search</h2>
        <p class="zzyzyz"> <?php echo userQuery_count_products();?> RESULT FOR "<?php echo strtoupper($_POST['item']) ?>"</p> <div class="ZQBZ" style="margin-left:40px; margin-right:35px"><hr></div>
        <div class="shopContainerRight" style="margin-left:30px">
         <?php 
                  if(isset($_POST['item'])){
                     userQuery();
                  }
                
          ?>
    </div>
                </div>
</body>
