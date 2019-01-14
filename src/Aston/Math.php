<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 12:36
 */

namespace Aston;


use InvalidArgumentException;

class Math
{
    public static function divide(float $a,float $b){

    if($b==0){
        throw new InvalidArgumentException('Division by zero');
    }
        return $a/$b;
    }

}