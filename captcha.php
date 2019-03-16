<?php
session_start();
$code=rand(1000,9999);
$_SESSION["code"]=$code;
$colors = [];
$red = rand(125, 175);
$green = rand(125, 175);
$blue = rand(125, 175);
$im = imagecreatetruecolor(75, 32);
imageantialias($im, true);
for($i = 0; $i < 5; $i++) {
	$colors[] = imagecolorallocate($im, $red - 20*$i, $green - 20*$i, $blue - 20*$i); //background color blue
}
$fg = imagecolorallocate($im, rand(200,255), rand(200,255), rand(200,255));//text color white
imagefill($im, 0, 0, $colors[0]);
for($i = 0; $i < 10; $i++) {
  imagesetthickness($im, rand(2, 10));
  $rect_color = $colors[rand(1, 4)];
  imagerectangle($im, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $rect_color);
}
imagestring($im, 5, 5, 5,  $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>