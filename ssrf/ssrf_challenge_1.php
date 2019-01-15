<?php
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Mission: Administrator page is located on http://".$_SERVER['SERVER_NAME'].":8060 and accessible only from localhost, try to access to this service.</u></h5>";
?>
<iframe src="ssrf_challenge_1_viewer.php?url=http://google.com" width="600" height="350" scrolling="no" frameborder="0"></iframe>

<?php 
require_once '../footer.php';
?>

<!--
/ssrf/ssrf_challenge_1_viewer.php?url=http://127.0.0.1:8060
-->