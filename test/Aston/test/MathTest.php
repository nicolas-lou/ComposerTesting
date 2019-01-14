<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 12:36
 */

namespace Aston\test;


use Aston\Math;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use TypeError;

class MathTest extends TestCase
{

    public function testDivisionInvalidArgument()
    {

        $this->expectException(TypeError::class);
        Math::divide(10, "d");

    }

    public function testFailDivisionByZero()
    {

        $this->expectException(InvalidArgumentException::class);
        Math::divide(10,0);
    }

    public function testDivide(){
        $this->assertEquals(5, Math::divide(10,2));
        $this->assertNotEquals(5, Math::divide(100,2));
    }
}