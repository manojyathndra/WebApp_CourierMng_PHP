<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>FAST COURIER</title>
<style>

	body{margin=0 auto;
		background-image:url(courier2.jpg);
		background-repeat:no-repeat;
		background-size:100%;
		}

	h1{	color:#ffcc00;
	   	text-align:center;
	   	position:relative;
	   	top:10px;
	   	font-family:courier;}
	
	.container{
		width:500px;
		height:600px;
		text_align:left;
		position:relative;
		margin:0 auto;
		margin-top:100px;
		margin-right:10px;
		color:yellow;
		font-weight:bold;
		font-size:20px;

		}	
	Input[type="text"],[type="password"],[type="email"]{
		height: 40px;
		width:300px;
		font-size:18px;
		margin-bottom:20px;
		padding-left:30px;
				
		}
	h2{color:#cc3300;
		position:relative;
		margin:0 auto;
		margin-top:50px;
		margin-right:5px;
		}
	.btn{
		padding: 15px 30px;
		color:white;
		border-radius:4px;
		border:none;
		background-color:#660066;
		}	

	h3{
		font-size:50px;
		position:absolute;
		margin:0 head;
		margin-top:10px;}
		
	.btn1{
		padding: 15px 30px;
		color:#fff;
		border-radius:4px;
		border:none;
		background-color:#ffff00;
		border_bottom:4px solid #27ae60;
		position:absolute;
		top:20px;
		text_align:right;
		}

	marquee{
		color:red;
		font-size:20px;
		position:absolute;
		top:70px;
		font-weight:bold;
		}
		
	a{
		text-decoration:none;
		}
	
	
</style>
<script type="text/javascript">
function fun()
{
    var username = document.forms["RegForm"]["username"];               
    var email = document.forms["RegForm"]["email"];    
    var phone = document.forms["RegForm"]["phone"];    
    var password = document.forms["RegForm"]["password"];  
    var address = document.forms["RegForm"]["address"];
           
    var pat1=/^[A-za-a]{4}[0-9]{2}$/
    var pat2=/^[0-9]{10}$/
    
        if(!pat1.test(username.value))
    {
        alert("Invalid USERNAME");
        username.focus(); 
        return false;
    }
    
     if(!pat2.test(phone.value))                           
   {
        window.alert("Please enter 10digit phone number."); 
        phone.focus(); 
        return false; 
    } 
    
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
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
   
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    } 
    
return true;
}
</script>
    
</head>
<body>

<h1>Welcome Fast Courier Service</h1>

<marquee><em> IF YOU ARE REGISTERED CLICK ON LOGIN BUTTON </em></marquee>


<div class="container"> <form action="reg.php" name="RegForm" onsubmit="return fun()" method="post" >

<h2> REGISTER</h2><br/>

<div class="form-input"><p>USERNAME : </p><input type="text" name="username" size="6" placeholder="Username"/></div>

<p>*username must contain 6 digit alphabet and numeric</p>

<div class="form-input"><p>PASSWORD : </p><input type="password" name="password" placeholder="Password" /></div>

<div class="form-input"><p>EMAIL    : </p><input type="email" name="email" placeholder="Email"/></div>

<div class="form-input"><p>PHONE    : </p><input type="text" name="phone" size="10" placeholder="phone"/></div>

<div class="form-input"><p>ADDRESS  : </p><input type="text" name="address" placeholder="Address"/></div>

<input type="submit" name="submit" value="REGISTER" class="btn" />

</form></div>

<a href="login1.php"><p class="btn1">LOGIN</p></a>


</body>
</html>