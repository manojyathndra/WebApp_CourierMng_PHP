<?php
session_start();
if($_SESSION["username"]!="")
{

?>

<html>
<head>
<title>VIEW BRANCH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	h1{text-align:center;
		font-family:courier;
		font-weight:bold;
		color:yellow;
		background-color:blue;}
			

	.mySlides {
		display:none;
		width:2000px;
		height:300px;}

	td{
		background-color:blue;
		font-family:courier;
		font-size:30px;
		color:yellow;
		}
	a:link{
		color:yellow;
		text-decoration:none;
		}

	a:visited{
		color:yellow;
		}
	
	p{
		font-size:20px;
		text-align:left;
		font-family:courier;
		}
		
	Input[type="text"]{
		height: 40px;
		width:300px;
		font-size:18px;
		margin-bottom:20px;
		padding-left:30px;
		font-family:courier;		
		}
		
		
	.btn{
		padding: 15px 30px;
		color:white;
		border-radius:4px;
		border:none;
		background-color:blue;
		}
		
	
</style>

</head>
<body >

<h1>FAST COURIER SERVICE</h1>


<div>
  <img class="mySlides" src="courier5.jpg"/>
  <img class="mySlides" src="courier6.png"/>
  <img class="mySlides" src="courier7.png"/>
  <img class="mySlides" src="courier8.png"/>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<table border="0.5px" cellpadding="10px" cellspacing="10px">
<tr>
<td><a href="Home1.php">HOME</a></td>
<td><a href="Pickup1.php">PICKUP REQUEST</a></td>
<td><a href="yourcourier1.php">YOUR COURIER</a></td>
<td><a href="viewbranch2.php">VIEW BRANCH</a></td>
<td><a href="pricelist1.php">PRICE</a></td>
<td><a href="feedback1.php">FEEDBACK</a></td>
<td><a href="logout1.php">LOG OUT</a></td>
</tr>
</table>

<div class="container"> <form action="viewbranch1.php" method="post">

<h2>VIEW BRANCH</h2><br/>

<div class="form-input"><p>ENTER PINCODE: </p><input type="text" name="pincode" placeholder="Pincode"/></div>

<input type="submit" name="submit" value="VIEW BRANCH" class="btn"/>

</form></div>

<p>OR</p>

<p><strong>VIEW ALL BRANCH</strong></p>

<div class="container"> <form action="viewbranch.php" method="get">


<input type="submit" name="submit" value="VIEW BRANCH" class="btn"/>

</form></div>
</body>
</html>
<?php
}
else{
    header('location:session.html');
}
?>