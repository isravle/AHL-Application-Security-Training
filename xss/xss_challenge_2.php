<?php
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Mission: create javascript alert.</u></h5>";
if (isset($_GET['name']))
{
    $name = $_GET['name'];
    $name = preg_replace("/script/i", "", $name);
    echo '<h2>Hello ' . $name . '!!</h2>';
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
<scrscriptipt>alert(1)</scrscriptipt>
-->