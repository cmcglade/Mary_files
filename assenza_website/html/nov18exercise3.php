<!doctype html=en>
<html>
<head>
	
	<title><?php echo $var; ?></title>
	
</head>
<body>

<?php 

	$color = array ("white", "green", "red") 
?> 

	 <p> I am wearing a <?php echo $color[1];?> sweater, <?php echo $color[2];?> shoes and 
	 a <?php echo $color[0];?> hat, today </p>


	 <?php
		$color= array("white", "green", "red");

		echo "
		<li>$color[1]</li>
		<li>$color[0]</li>
		<li>$color[2]</li>"; 
		?>

</body>
</html>