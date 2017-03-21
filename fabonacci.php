<!DOCTYPE html>
<html>
<head>
	<title> PHP</title>
</head>
<body>
<?php  
	$first = 0;
	$second = 1;
	echo "$first <br> $second";
	for ($i = 0;$i < 10 ;$i++) { 
		$third = $first+$second;
		echo "<br>$third ";
		$first = $second;
		$second= $third;
	}

?>
</body>
</html>