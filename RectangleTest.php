<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:42 AM
 */
include "Rectangle.php";
$rectangle = new Rectangle("rectangle", 5, 4);
echo $rectangle->calculateArea();
echo $rectangle->calculatePerimeter();