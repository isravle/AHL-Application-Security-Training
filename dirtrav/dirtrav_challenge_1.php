<?php 
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Misson: Read the following file content http://".$_SERVER['SERVER_NAME']."/flag.txt</u></h5>";
if (isset($_GET['page']))
{
	$page = $_GET['page'];
	$page = "data/".$page;
	
	$myfile = fopen($page, "rb") or die("Unable to open file!");
	echo fread($myfile,filesize($page));
	fclose($myfile);
}

require_once '../footer.php';
?>

<!--
../../flag.txt
-->