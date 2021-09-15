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

$result = mysqli_query($con,"SELECT * FROM pickup WHERE username='$_POST[username]'");

echo "<center> <table border='1' table-size=150%
<tr>
<th>Parcel ID</th>
<th>Username</th>
<th>Parcel Name</th>
<th>Parcel Weight</th>
<th>Pickup Date</th>
<th>Branch ID</th>
<th>From Address</th>
<th>To Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['parcel_name'] . "</td>";
echo "<td>" . $row['parcel_weight'] . "</td>";
echo "<td>" . $row['pickup_date'] . "</td>";
echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['from_address'] . "</td>";
echo "<td>" . $row['to_address'] . "</td>";
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
        <center><h2><a href="Home1.php">HOME</a></h2></center>
    </body>
</html>
<?php
}
else{
    header('location:session.html');
}
?>