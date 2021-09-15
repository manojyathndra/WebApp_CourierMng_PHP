<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>
USER LOGIN
</title>

<style>

	body{
		margin=0 auto;
		background-image:url(courier4.jpg);
		background-repeat:no-repeat;
		background-size:cover;
		}

	.container{
		width:500px;
		height:350px;
		background-color:rgba(0,0,0,0.8);
		text-align:center;
		position:relative;
		top:200px;
		margin:0 auto;
		margin-top:40px;
		padding-top:9px;
		border-radius:18px;
		color:white;
		font-weight:bolder;
		}
	
	Input[type="text"],[type="password"]{
		height:45px;
		width:300px;
		font-size:18px;
		margin-bottom:20px;
		background-color:#fff;
		padding-left:30px;
		}
	
	
	.btn{
		padding:15px 30px;
		colour: #fff;
		border_radius: 4px;
		border: none;
		background-color: #2ecc71;
		border-bottom: 4px solid #27ae60;
		}

	p{
		font-size:25px;
		font-weight:bold;
		text-align:center;
		color:blue;
		}
		
	a{
		text-decoration:none;}
		
</style>

<SCRIPT type="text/javascript">
window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>


</head>

<body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">

<div class="container">

<form action="adlogin1.php" method="post">
    <p>ADMIN LOGIN</p>
<div class="form-input"><input type="text" name="username" placeholder="ENTER USERNAME"/></div>
<div class="form-input"><input type="password" name="password" placeholder="ENTER PASSWORD"/></div>
<input type="submit" name="submit" value="LOGIN" class="btn"/>
</form>


</div>


</body>

</html>