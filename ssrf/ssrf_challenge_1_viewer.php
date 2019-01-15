<?php
require_once '../global.php';

if (isset($_GET['url'])){
	$url = $_GET['url'];
	if ($_GET['url'] == "http://127.0.0.1:8060"){
		echo "<center><h3>Well done!!, welcome to Administrator page!!!!<h3></center>";
	}
	else{
	$file = fopen($url, 'rb');
	fpassthru($file);
	}
}
?>

