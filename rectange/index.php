<?php
include 'Rectangle.php';
$width = 20;
$height = 10;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width;
echo $rectangle->height;
$rectangle->width = 30;
$rectangle->height = 50;
echo $rectangle->width;
echo $rectangle->height;
echo $rectangle->getArea();
echo $rectangle->getPerimeter();
echo $rectangle->display();