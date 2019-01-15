<?php
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Misson: Use your own PHP Web Shell.</u></h5>";
if (isset($_GET['page']))
{
	$page = $_GET['page']. ".php";
	
	if (!include($page)){
		die("<b>ERROR, file not found: " .htmlentities($page). "</b>");
	}
}

require_once '../footer.php';
?>

<!--
https://pastebin.com/raw/WwgZF7zF/?dd=
-->