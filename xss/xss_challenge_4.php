<?php
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Mission: create javascript alert.</u></h5>";
if (isset($_GET['name']))
{
    $name = $_GET['name'];
    if (preg_match('/alert/i', $_GET["name"]))
    {
        die("Web Application Firewall (WAF) detect malicious string --> 'alert'");
    }
    echo '<h2>Welcome back!!</h2>';
}
?>

<form action="" method="GET">
Enter your name: <input type="text" name="name" value="<?php if (isset($_GET['name'])){echo $name;}?>">
<br />
<input type="submit" value="Submit">
</form


<?php
require_once '../footer.php';
?>

<!--
" onmouseover="eval(atob('YWxlcnQoMSk='))
-->