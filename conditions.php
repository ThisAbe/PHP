<!DOCTYPE html>
<html>
<head>
<title> Conditions PHP </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
	height: 100%;
	}
</style>
</head>

<body>

<h1 align="center"> Conditions PHP</h1>
<br>
<img src="ConditionsImg.JPG" alt="Source Code">
<br>
<?php
$a = 7;
$x = 12;
$y = 1200;
$z = 12000;
if($x < $y)
{
	echo $x." is smaller than ".$y;
}
else{
	echo "There is an error";
}

echo "<br/>";

if ($z == $y)
{
	echo $z." is equal to ".$y;
}
else{
	echo $z." is not equal to ".$y;
}

echo "<br/>";

switch($a){
	case 3:
	      echo "a equals 3";
		  break;
	case 5:
	      echo "a equals 5";
		  break;
	case 7:
	      echo "a equals 7";
		  break;
}
echo "<br/>";
echo "Conditions allows for logical paths in any program, they allow
for logical flow in a program.";  

?>

</body>
</html>