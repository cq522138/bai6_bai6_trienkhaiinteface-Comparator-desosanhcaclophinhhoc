<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:40 AM
 */
include "Cylinder.php";
$cylinder = new Cylinder("marry", 4, 3);
echo $cylinder->calculateArea();
echo $cylinder->calculateVolume();