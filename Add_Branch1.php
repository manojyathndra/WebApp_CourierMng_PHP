<?php
session_start();
if($_SESSION["username"]!="")
{

?>
<html>
<head>
<title>ADD BRANCH</title>
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

	Input[type="text"],[type="date"]{
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
    
    .container{
		text-align:left;
		position:absolute;
		top:425px;
		margin:0 auto;
		margin-top:40px;
		}
    
    .container2{
		text-align:left;
		position:absolute;
		top:425px;
        left: 600px;
		margin:0 auto;
		margin-top:40px;
		}
		
	
</style>
<script type="text/javascript">
function fun()
{
    var bid = document.forms["RegForm"]["bid"];               
    var bname = document.forms["RegForm"]["bname"];  
    var address = document.forms["RegForm"]["address"];
    var phone = document.forms["RegForm"]["phone"]; 
    var pincode = document.forms["RegForm"]["pincode"];

           

    var pat1=/^[bB]{1}[0-9]{2}$/
    var pat2=/^[0-9]{10}$/
    var pat3=/^[0-9]{6}$/
    
        if(!pat1.test(bid.value))
    {
        alert("enter  BranchID");
        bid.focus(); 
        return false;
    }
    
        if (bname.value == "")                               
    { 
        window.alert("Please enter Branch Name."); 
        bname.focus(); 
        return false; 
    } 
    
        if (address.value == "")                        
    { 
        window.alert("Please enter Address"); 
        address.focus(); 
        return false; 
    } 
    
    
     if(!pat2.test(phone.value))                           
   {
        window.alert("Please enter 10digit phone number."); 
        phone.focus(); 
        return false; 
    } 
    
        
    if(!pat3.test(pincode.value))
    {
        alert("enter  Pincode");
        pincode.focus(); 
        return false;
    }
    
    
return true;
}
</script>
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

<div class="container"> <form action="branch.php" name="RegForm" onsubmit="return fun()" method="post">

<h2>ADD BRANCH</h2><br/>

<div class="form-input"><p>BRANCH ID: </p><input type="text" name="bid" placeholder="Branch ID"/></div>

<div class="form-input"><p>BRANCH NAME : </p><input type="text" name="bname" placeholder="Branch Name"/></div>

<div class="form-input"><p>ADDRESS : </p><input type="text" name="address" placeholder="Address"/></div>

<div class="form-input"><p>PHONE : </p><input type="text" name="phone" placeholder="Phone"/></div>

<div class="form-input"><p>PINCODE : </p><input type="text" name="pincode" placeholder="Pincode"/></div>


<input type="submit" name="submit" value="ADD BRANCH" class="btn"/>
    

</form></div>

<div class="container2"> <form action="viewbranch3.php" method="post">

<h2>SEARCH BRANCH</h2><br/>

<div class="form-input"><p>ENTER PINCODE: </p><input type="text" name="pincode" placeholder="Pincode"/></div>

<input type="submit" name="submit" value="VIEW BRANCH" class="btn"/>

</form></div>

</body>
</html>
<?php
}
else{
    header('location:session1.html');
}
?>