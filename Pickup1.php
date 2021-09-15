<?php
session_start();
if($_SESSION["username"]!="")
{

?>

<html>
<title>PICK UP</title>
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
		
	
</style>
    <script type="text/javascript">
function fun()
{
    var pid = document.forms["RegForm"]["pid"];               
    var username = document.forms["RegForm"]["username"];    
    var parcelname = document.forms["RegForm"]["parcelname"];    
    var weight = document.forms["RegForm"]["weight"];  
    var date = document.forms["RegForm"]["date"];
    var bid = document.forms["RegForm"]["bid"];    
    var fromaddress = document.forms["RegForm"]["fromaddress"];  
    var toaddress = document.forms["RegForm"]["toaddress"];
           
           
    var pat1=/^[A-za-a]{4}[0-9]{2}[pP]{1}[0-9]{3}$/
    var pat2=/^[A-za-a]{4}[0-9]{2}$/
    var pat3=/^[bB]{1}[0-9]{2}$/
    
        if(!pat1.test(pid.value))
    {
        alert("enter proper Parcel Id");
        pid.focus(); 
        return false;
    }
    
     if(!pat2.test(username.value))                           
   {
        window.alert("Please enter Proper Username."); 
        username.focus(); 
        return false; 
    } 
    
   
    if (parcelname.value == "")                               
    { 
        window.alert("Please enter your parcelname."); 
        parcelname.focus(); 
        return false; 
    } 
       
    if (weight.value == "")                                   
    { 
        window.alert("Please enter Weight."); 
        weight.focus(); 
        return false; 
    } 
   
       
    if (date.value == "")                           
    { 
        window.alert("Please enter Date."); 
        date.focus(); 
        return false; 
    }
    
    if (bid.value == "")                           
    { 
        window.alert("Please enter BranchID."); 
        bid.focus(); 
        return false; 
    }    
    
     if(!pat3.test(bid.value))
    {
        alert("enter proper BranchID");
        bid.focus(); 
        return false;
    }
      
    if (fromaddress.value == "")                               
    { 
        window.alert("Please enter Fromaddress."); 
        fromaddress.focus(); 
        return false; 
    } 
     
   
    if (toaddress.value == "")                               
    { 
        window.alert("Please enter TOaddress."); 
        toaddress.focus(); 
        return false; 
    } 
     
    
return true;
}
</script>

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
<td><a href="Home1.php">HOME</a></td>
<td><a href="Pickup1.php">PICKUP REQUEST</a></td>
<td><a href="yourcourier1.php">YOUR COURIER</a></td>
<td><a href="viewbranch2.php">VIEW BRANCH</a></td>
<td><a href="pricelist1.php">PRICE</a></td>
<td><a href="feedback1.php">FEEDBACK</a></td>
<td><a href="logout1.php">LOG OUT</a></td>
</tr>
</table>

<div class="container"> <form action="pickup.php" name="RegForm" onsubmit="return fun()" method="post">

<h2>PICKUP REQUEST</h2><br/>

<div class="form-input"><p>PARCEL ID: </p><input type="text" name="pid" placeholder="EX:usernamep001"/></div>

<p>*Username and Followed by "P" Your Parcel NO</p>

<div class="form-input"><p>USERNAME: </p><input type="text" name="username" placeholder="Username"/></div>

<div class="form-input"><p>PARCEL NAME : </p><input type="text" name="parcelname" placeholder="Parcel Name"/></div>

<div class="form-input"><p>PARCEL WEIGHT : </p><input type="text" name="weight" placeholder="Parcel Weight" /></div>

<div class="form-input"><p>PICKUP DATE : </p><input type="date" name="date" placeholder="Ex:12-jun-1997"/></div>

<div class="form-input"><p>BRANCH ID : </p><input type="text" name="bid" placeholder="Branch Id" /></div>

<div class="form-input"><p>FROM ADDRESS : </p><input type="text" name="fromaddress" placeholder="From Address"/></div>

<div class="form-input"><p>TO ADDRESS : </p><input type="text" name="toaddress" placeholder="To Address"/></div>

<input type="submit" name="submit" value="SEND REQUEST" class="btn"/>

</form></div>

</body>
</html>

<?php
}
else{
    header('location:session.html');
}
?>