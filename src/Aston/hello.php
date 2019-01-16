<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 10:38
 */

namespace Aston;

class Hello
{
    public function sayHello()
    {
        return "hello world";
    }
    public function sayFalse($nb1, $nb2)
    {
        if ($nb1+$nb2>20) {
            return true;
        } else {
            return false;
        }
    }
    public function tabHello()
    {
        return [1,2,3,4];
    }
}
