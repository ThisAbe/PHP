<!DOCTYPE html>
<html>
<head>
<title> Math PHP </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;}
</style>
</head>

<body>

<h1 align="center"> Math PHP</h1>
<br>
<img src="MathImg.JPG" alt="Source Code">
<br>
<?php
$x = 1;
echo $x;
echo "<br/>";
$x = $x * 10;
echo "First, we multiply x by 10(Answer will be 10): $x ";
echo "<br/>";
$x = $x + 3;
echo "Secondly, we add 3 to x(Answer will be 13): $x";
echo "<br/>";
$x = $x - 1;
echo "Then, we subtract 1 from x(Answer will be 12): $x";
echo "<br/>";
$x = $x / 3;
echo "Then, we divide x by 3(Answer will be 4): $x";
echo "<br/>";
$x = $x % 2;
echo "Then, we mod it by 2(Answer will be 0): $x";
echo "<br/>";

echo "With math functions we can create loops, set counters and do
various other functions";
?>

</body>
</html>