<!doctype html=en>
<html>
<head>
	
	<title><?php echo $var; ?></title>
	
</head>
<body>

<?php 

	$color = array ("white", "green", "red", array("yellow", "pink")); 
?> 

	 <p>"the memory of that scene for me is like a frame of film forever frozen at
	that moment: the <?php echo $color[2];?> carpet, the <?php echo $color[1];?> 
	lawn, the <?php echo $color[0];?> house, the leaden sky.
	The new president and his first lady. -Richard M. Nixon"</p>

		<?php
		print_r($color[3]);

		echo $color[1]; 

		echo $color[3][0];
		?>

</body>
</html>