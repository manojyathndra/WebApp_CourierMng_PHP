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

$result = mysqli_query($con,"SELECT * FROM employee WHERE eid='$_GET[eid]'");


echo "<center> <table border='1' table-size=150%>
<tr>
<th>Employee Name</th>
<th>Employee ID</th>
<th>Address</th>
<th>Phone</th>
<th>Email ID</th>
<th>Salary</th>
<th>Position</th>
<th>Branch ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ename'] . "</td>";
echo "<td>" . $row['eid'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>" . $row['position'] . "</td>";
echo "<td>" . $row['bid'] . "</td>";
echo "</tr>";
}
echo "</table> </center>";
    

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
        <center><h2><a href="Employee_home1.php">HOME</a></h2></center>
    </body>
</html>
<?php
}
else{
    header('location:session1.html');
}
?>