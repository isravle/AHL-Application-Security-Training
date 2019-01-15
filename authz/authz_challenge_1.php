<?php 
require_once '../global.php';
require_once '../header.php';
require_once '../db.php';

echo "<h5><u>* Mission: Disclose purchases of other users</u></h5>";


$con=mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sQuery = "SELECT * FROM `orders` where `order_user` = 'James Watts'";
$result = mysqli_query($con,$sQuery);

echo '
<h3>Hello James Watts </h3>
<form action="" method="POST">
Your purchases history: <select name="order_number">
';

while($row = mysqli_fetch_array($result))
{
echo "<option value='" .$row['order_number']. "'>" .$row['order_item']. "</option>";
}

echo '</select>
  <input type="submit" value="View">
</form>
<br>';
mysqli_close($con);



if (isset($_POST['order_number'])){
	$order_number = $_POST['order_number'];
	$con=mysqli_connect($host, $username, $password, $database);
	
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sQuery = "SELECT * FROM `orders` where `order_number` = '" .mysqli_real_escape_string($con, $order_number)."'";
	$result = mysqli_query($con,$sQuery);
	
	
	echo "<table border='1' style='text-align: center;' >
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
	
}

require_once '../footer.php';
?>

<!--
order_number=5
-->