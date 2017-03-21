<!DOCTYPE html>
<html>
<head>
	<title> This is  global variable</title>
</head>
<body>
	<?php
	function test() {
	    $foo = "local variable";

	    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
	    echo '$foo in current scope: ' . $foo . "<br>";
	}

	$foo = "Example content";
	test();
	?>

</body>
</html>