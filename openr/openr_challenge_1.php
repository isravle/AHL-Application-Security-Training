<?php
if (isset($_GET['redirect'])){
	header("Location: ".$_GET['redirect']);
	die();
}

require_once '../global.php';
require_once '../header.php';
?>

<h5><u>* Mission: Create redirect link to https://google.com</u></h5>
<a href="?redirect=/" style="color: Red">Back</a>


<?php
require_once '../footer.php';
?>

<!--
?redirect=https://google.com
-->