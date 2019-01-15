<?php
if (!isset($_COOKIE["Auth_User"])){
	setcookie("Auth_User", "James Watts", time()+3600);
	header("Refresh:0");
	die();
}

require_once '../global.php';
require_once '../header.php';
require_once '../db.php';

echo "<h5><u>* Mission: authenticate as difference user and disclose purchases</u></h5>";

echo '<h3>Hello '.htmlentities($_COOKIE["Auth_User"]).'</h3>'; 

$Auth_User = $_COOKIE["Auth_User"];

$con=mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sQuery = "SELECT * FROM `orders` where `order_user` = '" .mysqli_real_escape_string($con, $Auth_User)."'";
$result = mysqli_query($con,$sQuery);


echo "Your last purchases <table border='1' style='text-align: center;' >
<tr>
<th>Order ID</th>
<th>Order User</th>
<th>Order Item</th>
<th>Order Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['order_number'] . "</td>";
echo "<td>" . $row['order_user'] . "</td>";
echo "<td>" . $row['order_item'] . "</td>";
echo "<td>" . $row['order_price'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);


require_once '../footer.php';
?>

<!--
Cookie:  Auth_User=Hattie+Fields;
-->