<!doctype html>
<html lang=en>
<head>
	<meta charset="utf-8">
	<title>Nov 18 In Class</title>
</head>
<body>

	<p>Counting the elements in an array</p>
	
	<?php
		$users= ["Mary", "Megan", "Odelia", "Jon", "Aline", 
		"Ting", "Alejandro"];
	
		$number_users= count($users);
		echo "$number_users <br>";
		/*HTML should be separate from PHP where possible = easier to read. <br> tags can be inside
		PHP arrays (see above)
	
		could just echo function (see below), but its always a better idea to declare it as another 
		variable so it can be used again.
		echo count($users); */
		
		print_r($users);
	?>

	<br>
	
	<!-- more legible way to print array to screen-->
	<pre>
		<?php print_r($users);?>
	</pre>
	
	<!--Instead of listing things individually like this, automate it with PHP using conditional statements
	<ul>
		<li><?php echo $users[0]; ?></li>
		<li><?php echo $users[1]; ?></li>
		<li><?php echo $users[2]; ?></li>
		<li><?php echo $users[3]; ?></li>
		<li><?php echo $users[4]; ?></li>
		<li><?php echo $users[5]; ?></li>
		<li><?php echo $users[6]; ?></li>								
	</ul>
	-->
	
	<h2>In-class exercise</h2>
	<!--Create a PHP script which display the capital and country name from the above array $ceu. 
	Sort the list by the name of the country.-->
	
	<?php $capitals = array("Italy"=>"Rome", 
	"Luxembourg"=>"Luxembourg", 
	"Belgium"=> "Brussels", 
	"Denmark"=>"Copenhagen", 
	"Finland"=>"Helsinki", 
	"France" => "Paris", 
	"Slovakia"=>"Bratislava", 
	"Slovenia"=>"Ljubljana", 
	"Germany" => "Berlin", 
	"Greece" => "Athens", 
	"Ireland"=>"Dublin", 
	"Netherlands"=>"Amsterdam", 
	"Portugal"=>"Lisbon", 
	"Spain"=>"Madrid", 
	"Sweden"=>"Stockholm", 
	"United Kingdom"=>"London", 
	"Cyprus"=>"Nicosia", 
	"Lithuania"=>"Vilnius", 
	"Czech Republic"=>"Prague", 
	"Estonia"=>"Tallin", 
	"Hungary"=>"Budapest", 
	"Latvia"=>"Riga", 
	"Malta"=>"Valetta", 
	"Austria" => "Vienna", 
	"Poland"=>"Warsaw");
	
	/*Sort the array alphabetically first using asort($capitals);
	If $country_name is the key/name, and $city_name is the value, then
	foreach($capitals as $country_name=>$city_name)
	{ 
		echo " ... <br>"
	};
	*/
	
	asort($capitals);
	foreach($capitals as $country_name => $city_name)
	{
	echo "The capital of $country_name is $city_name.<br>";
	}
	
	
	?>












</body>
</html>
