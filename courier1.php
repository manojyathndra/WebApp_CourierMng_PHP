<?php
session_start();
if($_SESSION["username"]!="")
{

?>
<html>
<head>
<title>COURIER</title>
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
		
	Input[type="text"]{
		height: 40px;
		width:300px;
		font-size:18px;
		margin-bottom:20px;
		padding-left:30px;
		font-family:courier;		
		}
	
	p{
		font-size:20px;
		text-align:left;
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
<body>

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
<td><a href="Employee_home1.php">HOME</a></td>
<td><a href="Add_Employee1.php">EMPLOYEE</a></td>
<td><a href="Add_Branch1.php">BRANCH</a></td>
<td><a href="employeedetail2.php">EMPLOYEE DETAILS</a>
<td><a href="courier1.php">COURIER</a></td>
<td><a href="display.php">DISPLAY</a></td>
<td><a href="View_Feedback1.php">VIEW FEEDBACK</a></td>
<td><a href="adlogout.php">LOGOUT</a></td>    
</tr>
</table>

<div class="container"> <form action="viewcourier1.php" method="get">

<h2>VIEW COURIER</h2><br/>

<p>SEARCH DATE WISE</p>

<div class="form-input"><p>ENTER DATE: </p><input type="text" name="date" placeholder="EX:yyyy-mm-dd"/></div>

<input type="submit" name="submit" value="VIEW COURIER" class="btn"/>

</form></div>

<p>OR</p>

<p><strong>VIEW ALL COURIER</strong></p>

<div class="container"> <form action="viewpickup.php" method="get">


<input type="submit" name="submit" value="VIEW COURIER" class="btn"/>

</form></div>

</body>
</html>
<?php
}
else{
    header('location:session1.html');
}
?>