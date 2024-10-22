<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Examen 2 unidad</title>
	<style type="text/css">
		body{
			background-color: lightgoldenrodyellow;
			font-family: arial;
			font-size: 25px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
	$telefono = array("Nokia" => "20000", "Iphone"=>"30000", "Hawei"=> "15000", "LG"=>"13000", "Samsung"=> "25000" );
	foreach($telefono as $marca=>$precio){
	echo "El $marca cuesta $precio";
	echo "<br>";
}
echo "<p>";

$telefono ["Motorola"]= "5000";
$telefono ["Ryzen"]= "7000";

arsort($telefono);

	foreach($telefono as $marca=>$precio){
	echo "El $marca cuesta $precio";
	echo "<br>";
}

    ?>

</body>
</html>