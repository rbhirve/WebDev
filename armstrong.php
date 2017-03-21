<!DOCTYPE html>
<html>
<head>
	<title> PHP</title>
</head>
<body>
<?php  
	$num = 407;
	$total= 0;
	$x= $num;
	while ($x!=0) {
		$rem=$x%10;
		$total= $total+($rem*$rem*$rem);
		$x= $x/10;
	}

	if($num==$total){
		echo "Number is Armstrong Number";

	}else{
			echo "Number is Not Armstrong Number";
	}

?>
</body>
</html>