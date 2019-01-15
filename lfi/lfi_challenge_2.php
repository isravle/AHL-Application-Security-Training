<?php
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Misson: Access to administrator web shell http://".$_SERVER['SERVER_NAME']."/shell.php</u></h5>";
if (isset($_GET['page']))
{
	$page = $_GET['page'];
	$blacklist = "../../";
	
	if(strpos($page, $blacklist) !== false) {
		die("Web Application Firewall (WAF) detect malicious string --> '../../'");	
	}

	$page = "data/".$page;
	
	include($page);
}

require_once '../footer.php';
?>

<!--
.././../shell.php&cmd=whoami
-->