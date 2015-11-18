<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Array Functions</title>
	
</head>
<body>

<?php $ceu= array("Italy"=>"Rome", 
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
	"Poland"=>"Warsaw") ;

	ksort($capitals); 

	foreach($ceu as $country_name => $city_name) 
	{
	echo "the capital of $country_name is $city_name <br>";
	}

	

	
?> 

	 

</body>
</html>