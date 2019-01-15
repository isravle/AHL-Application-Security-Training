<?php
require_once '../global.php';
require_once '../header.php';
require_once '../db.php';

echo '
<h5><u>* Mission: get mysql version.</u></h5>
<form action="" method="GET">
Select available item: <select name="product_ID">
  <option value="1">iPhone X 256GB</option>
  <option value="3">Galaxy Note 9 64GB</option>
  <option value="5">Macbook Pro i7/16GB/1T-SSD</option>
</select>
  <input type="submit">
</form>
<br>
';

if (isset($_GET['product_ID']))
{
	$product_ID = $_GET['product_ID'];
	
	if (preg_match('/ /', $product_ID)) {
		die("Web Application Firewall (WAF) detect malicious string --> ' '");	
	}
	
	$con=mysqli_connect($host, $username, $password, $database);
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sQuery = "SELECT * FROM `products` where `id` = " .mysqli_real_escape_string($con,$product_ID). " limit 1";
	$result = mysqli_query($con,$sQuery);

	echo "<table border='1' style='text-align: center;' >
	<tr>
	<th>Procudt ID</th>
	<th>Procudt Name</th>
	<th>Procudt Price</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
	
	echo "<p><b>Executing query: </b>".htmlentities($sQuery)."</p>";
}

require_once '../footer.php';
?>

<!--
99/**/union/**/select/**/1,version(),3#
-->