<!Doctype html>

<html>

<head> 

<title>Forms Assignment</title>




</head>
<?php
?> 
    
   
<body>
	<form method='POST'>
	<h3>Please input your name:</h3>
	<label>Name</label><input type="text" name="name"/>
	<label>Last Name</label><input type="text" name="last_name"/>
    <label>Mother's Maiden Name</label><input type="text" name="mother's_maiden_name"/>
    <label>Favourite Color<lable><input type="text" name="favourite color"/>
	<label>Postal Code</label><input type="text" name="postal_code"/>
	<input type="Submit" value="Submit Name"/>
	</form>
	
	<?php
		//Retrieve name from query string and store to a local variable
		$var=ucfirst($_POST["name"]);
		$varb=ucfirst($_POST["last_name"]);
		$varc=ucfirst($_POST["mother's_maiden_name"]);
        $vard= strtolower($_POST["favourite_color"]);
        $vare=strtoupper($_POST["postal_code"]);
		
		echo "<h4>Hello $var , I find it interesting to think about how our 
        identity might change if we had our mother's name. If your name wasn't 
        $var $varb, but instead it was $var $varc, 
        would your favourite colour still be $vard? Would you still live in $vare? </h4>";
	?>
     


               
    
    </body>
    
    
</html>