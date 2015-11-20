<!Doctype html>

<html>

<head> 

<title>IN CLASS ASSIGNMENT</title>




</head>
    
    <?php
    $color = array ("white", "green", "red", "blue", "black");
 ?> 
<body>
    "The memory of that scene for me like a frame of film forever at that moment: 
    The <?php echo $color[2];?> red carpet, the <?php echo $color[1];?> green lawn, 
    e <?php echo $color[0];?> white house, the leaden sky. 
    The new preseident and his first lady. - Richard M. Nixon. 

    
    <?php

        $color = array("white", "green", "red"); 
        
        echo "<p>\"the memory of that scene for me is like a flame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. the new president and his first lady.-Richard M. Nixon\"</p>";

print_r($color[3]);
    ?>
    print_r($color);
    
    echo $color[1]; 
    
    echo$color[3][0];
    
    <?php
    
    
    $color = array ("white", "green", "red"); 
    
    echo 
        "<li>$color[1]</li>
        <li>$color[0]</li>
        <li>$color[2]</li>";
        
        ?>
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
		$var= $_POST["name"];
		$varb= $_POST["last_name"];
		$varc= $_POST["mother's_maiden_name"];
        $vard= $_POST["favourite_color"];
        $vare= $_POST["postal_code"];
		
		echo "<h4>Hello $var , I find it interesting to think about how our 
        identity might change if we had our mother's name. If your name wasn't 
        $var $varb, but instead it was $var $varc, 
        would your favourite colour still be $vard? Would you still live in $vare? </h4>";
	?>
     
               
    
    </body>
    
    
</html>