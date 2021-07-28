<!DOCTYPE html>
<html>
<head>
	<title>Writing Text File</title>
</head>
<body>
	<?php
		$fp = fopen("file.txt","w+") or die("Unable to open file for write operation");
		$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.";
		fwrite($fp, $str);
		echo fread($fp, filesize("file.txt"));
		fclose($fp);
	?>
</body>
</html>