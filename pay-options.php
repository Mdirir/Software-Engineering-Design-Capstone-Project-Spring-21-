
<style>
.aaa{
   width: 780px;
   height: auto;
   margin-left:30%;
   background-color: white;
   margin-top:66px;
   margin-bottom:66px;
}
.aaa img{
   width: 100%;
   height: auto;
}
.aaa h2{
   font-family: Arial, Helvetica, sans-serif;
   text-align: center;
   padding: 20px 0px;
   background-color:white;
   transform: translate(0, -5px);
}
.aaa a{
   text-decoration: none;
   display: block;
   padding:10px;
  color: blue;
   font-size: 21px;
   font-family: Arial, Helvetica, sans-serif;
   text-align: center;
   background-color:white;
   
}
.aaa a:hover{
   transform: translate(0, 5px);
  
}
.aaa button:hover{
     transform: translate(0, 1px);
      cursor:pointer;
}
.aaa button{
   padding:10px;
   font-sizE:21px;
   text-align:Center;
   border:none;
   color:blue;
   background-color:white;
   width:100%
}
.alert {
  padding: 20px;
  color: white;
  text-align:center;

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
  background-color:#28a745;
}

.closebtn:hover {
  color: black;
}

</style>
<body>
   <div class="aaa">
      <h2> Payment Options For You</h2>
      <form action="checkout-me.php" method="post" style="border-top:10px solid #e7e7e7;">
         <button name="pai">Offline Payment</button>
         <?php checkout(); ?>
      </form>
      <a href="">Dogecoin Payment</a>
      <img src="images/paypal_logo.jpg"  alt="">
   </div>
</body>


