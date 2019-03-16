<!DOCTYPE html>
<html>
<head>
<title> Constant PHP </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;}
</style>
</head>

<body>

<h1 align="center"> Constant PHP</h1>
<br>
<img src="ConstantImg.JPG" alt="Source Code">
<br>
<?php
define('fav_animal',' a Dog');
define('fav_food', 'Burgers');

echo "My name is Abe and favorite animal is ". fav_animal . " and my
favorite food are " . fav_food;

echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Constants are like variables, but they cannot be changed after
being declared";
?>

</body>
</html>