<?php
ini_set("memory_limit",-1);
  $filename = 'images/jashan_sbs_2015_logo.png';    

// open an image
$image = imagecreatefromjpeg($filename); // imagecreatefromjpeg/png/
// get image dimension, define colour array
$width = imagesx($image);
$height = imagesy($image);
$colors = array();

for ($y = 0; $y < $height; $y++) {
$y_array = array() ;

for ($x = 0; $x < $width; $x++) {
    $rgb = imagecolorat($image, $x, $y);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;

    $x_array = array($r, $g, $b) ;
    $y_array[] = $x_array ; 
} 
$colors[] = $y_array ;
}

var_dump($colors);
?>