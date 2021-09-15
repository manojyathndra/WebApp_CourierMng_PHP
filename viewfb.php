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

$result = mysqli_query($con,"SELECT * FROM feedback");

echo "<center> <table border='1' table-size=150%>
<tr>
<th>FEEDBACK ID</th>
<th>USERNAME</th>
<th>FEEDBACK</th>
<th>RATING</th>
<th>EMLOYEE ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fid'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
echo "<td>" . $row['rating'] . "</td>";
echo "<td>" . $row['eid'] . "</td>";
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