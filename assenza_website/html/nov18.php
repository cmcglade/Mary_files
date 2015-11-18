<!Doctype HTML>

<head>
	
	
	<title>Array Functions</title>
	
</head>
<body>

	<p> this is how we count the elements in an array </p>


<?php 
	$users = ["Mary", "Megan", "Odelia", "Jon", "Aline", "Ting"
		"Alejandro"];

		//$attendees = count($users);
		//echo $attendees; 
		$number_users =count($users); 
		echo $number_users; 
		print_r($users); 
?>		

	<br>

	<pre>
	<?php print_r($users); ?> 
	</pre>

	

	 

</body>
</html>

