<?php
session_start();
ob_start();
require_once "config.php";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title>jQuery Autocomplete Plugin</title>
<script type="text/javascript" src="jquery.js"></script>
<script type='text/javascript' src='jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />

<script type="text/javascript">
$().ready(function() {
	$("#course").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
</script>
</head>
<body>
<h2 id="banner">Ajax Autocomplete Demo 
- Jquery, PHP, Mysql</h1>
<div id="content">
	<form autocomplete="off">
		<p>
			Course Name <label>:</label>
			<input type="text" name="course" id="course" />
			<!--input type="button" value="Get Value" /-->
		</p>
		<input type="submit" value="Submit" />
	</form>
</div>
<div align="center">
<a href="http://beski.wordpress.com">http://beski.wordpress.com</a>
</div>
</body>
</html>
