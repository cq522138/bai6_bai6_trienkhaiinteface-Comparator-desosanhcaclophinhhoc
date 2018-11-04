<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:37 AM
 */
include "CircleComparator.php";
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));