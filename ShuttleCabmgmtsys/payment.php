<html>
<head>
<title>Payment gateway | Shuttle Cab Management System</title>
<link rel="icon" href="./images/shuttle_icon.jpg"/>
<style>
img
{
width:16px;
height:15px;
}
.d2
{
padding:100px;
background-color:white;
border:1px solid rgb(230,230,230);
cursor:pointer;
line-height:25px;
width:1000px;
height:2000px;
margin-left:auto;
margin-right:auto;
opacity:0.9;
margin-top:0px;
color:black;
background-color:white;
}
body
{
background-color: powderblue;
margin:0;
}
#c1
{
font-size:18px;
font-family:helvetica;
background-color:#e3f2fd;
margin-top:-20;
width:100%;
height:13%;
font-size:50px;
color:#0F387D;
}
#card
{
width:25%;
height:165px;
}
#card1
{
margin:auto;
width:25%;
height:165px;
}
#cash
{
margin:auto;
width:25%;
height:165px;
}
</style>

<script type="text/javascript">
  function displaycash()
  {
    alert("Cash payment confirmed. Make payment at shuttle cab. Thanks for using Shuttle Cab Management System! :)                                  Returning to user profile page...");
  }
  </script>

<body>
<br>
<div id="c1"><center><b>Payment Gateway </b></center></div>
<div class="d2"><div class="i2"><h2>Payment Method </h2></div></br>
<table>
<tr>
<td><img id="card" src="images/cards.jpg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img id="card1"
src="images/paypal.jpg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img id="cash" src="images/money.jpg">
</td>
</tr>
</table>
<ul>
<li><a href="http://localhost/ShuttleCabmgmtsys/payment_back.php">Credit Card/Debit Card/Net Banking</a>
<li><a href="https://www.sandbox.paypal.com/us/signin">Paypal</a>
<li><a href="http://localhost/ShuttleCabmgmtsys/first_page.php" onclick="displaycash()">Cash (to be payed at shuttle)</a>
</ul>
</body>
</head>
</html>