<!DOCTYPE html>
<html>
<head>
<title> My Second PHP document </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;}
</style>
</head>

<body>

<h1 align="center"> Welcome to my PHP document</h1>
<br>
<img src="GOAT.jpg" alt="A goat" width="500" height="410">
<br>
<?php
$first = "Abijith(Abe)";
$last = "Ajith";

echo "My name is " . $first . " " . $last;
// This is will print: My name is Abijith(Abe) Ajith

?>

</body>




</html>