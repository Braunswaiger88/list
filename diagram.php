<?php

$values = array("23","32","35","57","12",
    "3","36","54","32","15",
    "43","24","30");


$columns  = count($values);

=
$width = 200;
$height = 100;


$padding = 5;


$column_width = $width / $columns ;


$im        = imagecreate($width,$height);
$gray      = imagecolorallocate ($im,0xcc,0xcc,0xcc);
$gray_lite = imagecolorallocate ($im,0xee,0xee,0xee);
$gray_dark = imagecolorallocate ($im,0x7f,0x7f,0x7f);
$white     = imagecolorallocate ($im,0xff,0xff,0xff);


imagefilledrectangle($im,0,0,$width,$height,$white);

$maxv = 0;


for($i=0;$i<$columns;$i++)$maxv = max($values[$i],$maxv);


for($i=0;$i<$columns;$i++)
{
    $column_height = ($height / 100) * (( $values[$i] / $maxv) *100);

    $x1 = $i*$column_width;
    $y1 = $height-$column_height;
    $x2 = (($i+1)*$column_width)-$padding;
    $y2 = $height;

    imagefilledrectangle($im,$x1,$y1,$x2,$y2,$gray);


}

?>