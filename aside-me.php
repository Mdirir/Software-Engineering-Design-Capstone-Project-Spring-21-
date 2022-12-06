
<style>
.user-side{
    width: 200px;
    height:auto;
    margin-top:20px;
    margin-left:210px;

}

.user-side li{
     background-color: white;
}
.user-side ul{
    height: 290px;
    border: 1px solid rgb(160, 160, 160);
}
.user-side span{
 background-color: inherit;
}

 
 .user-side a{
   width: 100%;
   padding:5px; 
   background-color: white;
   color:black;
   display:block;
   padding-left:20px;
 }
.user-side a:hover{
    background-color: rgb(224, 224, 224);
}
a.active{
    background-color: #337ab7;
}

/**/



</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="style-me.css">
<body>
    
<div class="user-side"> 
<!-- link li with id= name it link name just figure it out"-->

<ul >
                <li style="padding-left: 20px;" > <a href="profile-me.php"> <span class="fa fa-user" ></span> Profile</a></li> 
                <li style="padding-left: 20px;"> <a href="editaccount-me.php" ><span class="fa fa-pencil" ></span> Edit Account</a></li> 
                <li style="padding-left: 20px;"> <a href="user-side-me.php"><span class="fa fa-list" ></span> My Orders</a></li> 
                <li style="padding-left: 20px;"> <a href="changePassword-me.php" ><span class="fa fa-key" ></span> Change Password</a></li> 
                <li style="padding-left: 20px;"> <a href="deleteAccount-me.php" ><span class="fa fa-remove" ></span> Delete Account</a></li>
                <li style="padding-left: 20px;"> <a href="logout-me.php" ><span class="fa fa-power-off" ></span> Logout</a></li>  
              </ul>
            </div>

<script type=text/javascript>
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length;
    for (let i=0; i<menuLength; i++){
        if(menuItem[i].href === currentLocation){
            menuItem[i].className = "active";
        }
    }
</script>

</body>