<!DOCTYPE html>
<html>
<head>
<title> Predefined PHP </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;}
</style>
</head>

<body>

<h1 align="center"> Predefined PHP</h1>
<br>
<img src="PredefinedImg.JPG" alt="Source Code">
<br>
<?php

echo "This file is located: <br/>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br/>";
echo "This server is running: <br/>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br/> <br/>";
echo "Predefined variables can be used to retrieve useful information 
about the current server, file location and other properties";

?>

</body>
</html>