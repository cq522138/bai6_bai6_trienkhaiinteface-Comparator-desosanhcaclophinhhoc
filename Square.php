<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:43 AM
 */
include "Rectangle.php";
class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}