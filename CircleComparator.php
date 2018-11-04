<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 8:35 AM
 */
include "Circle.php";
include "Comparator.php";
class CircleComparator implements Comparator
{
    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if ($radiusOne > $radiusTwo) {
            return 1;
        }  else if($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}