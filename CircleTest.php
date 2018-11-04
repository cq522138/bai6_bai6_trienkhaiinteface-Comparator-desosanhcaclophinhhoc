<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:38 AM
 */
include "Circle.php";
$circle = new Circle("indigo", 4);
echo $circle->calculateArea();
echo $circle->calculatePerimeter();