<!Doctype html>
<html>

<head>
	
	<title>Array Functions</title>
	
</head>
<body>

<?php 

	$names1=array("Salima", "Antonio", "Krystal");
	$names2=array("Odelia", "Aline", "Megan");

	$a = count($names1);
	$b = count($names2);

	$a = 18; 
	$b =6; 

	if ($a > $b){
		echo "a is bigger than b! <br>";
	}
		elseif ($a == $b){


		echo "they are the same <br>";
	}
		else{

		echo "oops, a is not greater than b <br>";

		}
		
?>

</body>
</html>