<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:44 AM
 */
include "Square.php";
$square = new Square("square", 5);
echo $square->calculateArea();
echo $square->calculatePerimeter();