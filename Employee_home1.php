<?php
session_start();
if($_SESSION["username"]!="")
{

?>
<html>
<head>
<title>HOME</title>
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
		font-size:40px;
		text-align:center;
		font-family:courier;
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

<p>WELCOME TO FAST COURIER SERVICE</p>
<p>SEND YOUR VALUABLE THING WITH TRUST AND SAFE</p>

</body>
</html>
<?php
}
else{
    header('location:session1.html');
}
?>