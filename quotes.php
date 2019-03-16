<!DOCTYPE html>
<html>
<head>
<title> Quotes PHP </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;}
</style>
</head>

<body>

<h1 align="center"> Quotes PHP</h1>
<br>
<img src="QuotesImg.JPG" alt="Source Code">
<br>
<?php

$fav_animal = dog;
echo "My favorite animal is $$fav_animal (double) <br/>";
echo 'My favorite animal is $fav_animal (single)';
echo "<br/>";
echo " Single quotes will take the statement literally,
but double quotes statements are interpreted and can have 
variables that will be transformed";

?>

</body>
</html>