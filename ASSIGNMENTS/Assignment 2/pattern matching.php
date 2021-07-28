<!DOCTYPE html>
<html>
<head>
	<title>Pattern Matching</title>
</head>
<body>
	<?php
	$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.";
	$pattern = "/dolor/";
	echo preg_match_all($pattern,$str);
	?>
</body>
</html>