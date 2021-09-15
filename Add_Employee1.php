<?php
session_start();
if($_SESSION["username"]!="")
{

?>s
<html>
<head>
<title>EMPLOYEE</title>
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
    
    #red{color: red;}

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
    
    .container3{
		text-align:left;
		position:absolute;
		top:425px;
        left: 1200px;
		margin:0 auto;
		margin-top:40px;
		}
		
	
</style>
<script type="text/javascript">
function fun()
{
    var ename = document.forms["RegForm"]["ename"];               
    var eid = document.forms["RegForm"]["eid"];  
    var address = document.forms["RegForm"]["address"];
    var phone = document.forms["RegForm"]["phone"]; 
    var email = document.forms["RegForm"]["email"];
    var salary = document.forms["RegForm"]["salary"];    
    var position = document.forms["RegForm"]["position"];  
    var bid = document.forms["RegForm"]["bid"];
           

    var pat1=/^[eE]{1}[0-9]{2}$/
    var pat2=/^[0-9]{10}$/
    var pat3=/^[bB]{1}[0-9]{2}$/
    
        if (ename.value == "")                               
    { 
        window.alert("Please enter Employee Name."); 
        ename.focus(); 
        return false; 
    } 
    
        if(!pat1.test(eid.value))
    {
        alert("Enter Employee ID");
        eid.focus(); 
        return false;
    }
    
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
        return false; 
    } 
    
     if(!pat2.test(phone.value))                           
   {
        window.alert("Please enter 10digit phone number."); 
        phone.focus(); 
        return false; 
    } 
    
          
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
      
    if (salary.value == "")                        
    { 
        window.alert("Please enter Salary"); 
        salary.focus(); 
        return false; 
    } 
    
    if (position.value == "")                        
    { 
        window.alert("Please enter Position"); 
        position.focus(); 
        return false; 
    } 
    
    if(!pat3.test(bid.value))
    {
        alert("enter  BranchID");
        bid.focus(); 
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

<div class="container"> <form action="employee.php" name="RegForm" onsubmit="return fun()" method="post">

<h2>ADD EMPLOYEE</h2><br/>

<div class="form-input"><p>EMPLOYEE NAME: </p><input type="text" name="ename" placeholder="Employee Name"/></div>

<div class="form-input"><p>EMPLOYEE ID : </p><input type="text" name="eid" placeholder="Employee ID"/></div>

<div class="form-input"><p>ADDRESS : </p><input type="text" name="address" placeholder="Address" /></div>

<div class="form-input"><p>PHONE : </p><input type="text" name="phone" placeholder="Phone"/></div>

<div class="form-input"><p>EMAIL ID : </p><input type="text" name="email" placeholder="Email Id" /></div>

<div class="form-input"><p>SALARY : </p><input type="text" name="salary" placeholder="Salary"/></div>

<div class="form-input"><p>POSITION : </p><input type="text" name="position" placeholder="position"/></div>

<div class="form-input"><p>BRANCH ID : </p><input type="text" name="bid" placeholder="Branch ID"/></div>

<input type="submit" name="submit" value="ADD EMPLOYEE" class="btn"/>

</form></div>
    
<div class="container2"> <form action="updateemp.php" method="post">

<h2>UPDATE EMPLOYEE</h2><br/>
    
<div class="form-input"><p>EMPLOYEE ID : </p><input type="text" name="eid1" placeholder="Employee ID"/></div>

<div class="form-input"><p>ADDRESS : </p><input type="text" name="address1" placeholder="Address" /></div>

<div class="form-input"><p>PHONE : </p><input type="text" name="phone1" placeholder="Phone"/></div>

<div class="form-input"><p>EMAIL ID : </p><input type="text" name="email1" placeholder="Email Id" /></div>

<div class="form-input"><p>SALARY : </p><input type="text" name="salary1" placeholder="Salary"/></div>

<div class="form-input"><p>POSITION : </p><input type="text" name="position1" placeholder="position"/></div>

<div class="form-input"><p>BRANCH ID : </p><input type="text" name="bid1" placeholder="Branch ID"/></div>

<input type="submit" name="submit" value="UPDATE EMPLOYEE" class="btn"/>

</form></div>

    
<div class="container3"> <form action="deleteemp1.php" method="post">

<h2>DELETE EMPLOYEE</h2><br/>

<div class="form-input"><p>ENTER EID: </p><input type="text" name="eid3" placeholder="Employee ID"/></div>

<input type="submit" name="submit" value="DELETE" class="btn"/>

</form></div>
    
</body>
</html>
<?php
}
else{
    header('location:session1.html');
}
?>