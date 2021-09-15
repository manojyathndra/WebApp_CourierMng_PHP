<?php
session_start();
if($_SESSION["username"]!="")
{

?>
<html>
<head>
    <?php
$con=mysqli_connect('localhost','root','','courier');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM branch");

echo "<center> <table border='1' table-size=150%>
<tr>
<th>Branch ID</th>
<th>Branch Name</th>
<th>Address</th>
<th>Phone</th>
<th>Pincode</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['branch_name'] . "</td>";
echo "<td>" . $row['branch_address'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['pincode'] . "</td>";
echo "</tr>";
}
echo "</table></center>";

mysqli_close($con);
?>
<style>
                    body{margin=0 auto;
		                  background-image:url(c8.jpg);
		                  background-repeat:no-repeat;
		                  background-size:100%;
		                  }
                    a:link{
		                  color:black;
		                  text-decoration:none;
		                  }

	               a:visited{
		                  color:black;
		                  }
            </style>
    </head>
    
    <body>
        <center><h2><a href="Home1.php">HOME</a></h2></center>
    </body>
</html>
<?php
}
else{
    header('location:session.html');
}
?>