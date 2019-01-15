<?php 
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Mission: create javascript alert.</u></h5>";
if (isset($_GET['name']))
{
    $name = $_GET['name'];
	
echo '
<script>
	var Name= "' .addslashes($name). '";
</script>';
}
?>

<form action="" method="GET">
Enter your name: <input type="text" name="name" value="">
<br />
<input type="submit" value="Submit">
</form

<?php
require_once '../footer.php';
?>

<!--
</script><script>alert(1);</script>
-->