<!DOCTYPE html>
<html>
<head>
	<title> PHP</title>
</head>
<body>
<?php  
	$num = 4;
	$fact = 1;
	for($k=1;$k<=$num;$k++){
		$fact=$fact*$k;

	}
	echo "Factorial of number $num is $fact <br>";

	
?>
</body>
</html>