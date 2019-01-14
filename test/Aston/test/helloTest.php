<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 12:09
 */

namespace Aston\test;


use Aston\hello;
use PHPUnit\Framework\TestCase;

class helloTest extends TestCase
{

    public function testSayHello(){

        $hello = new hello();
        $this->assertEquals('hello world', $hello->sayHello());
    }
    public function testSayHelloFalse(){
        $hello = new hello();
        $this->assertEquals(false,$hello->SayFalse(10,9));
        $this->assertContains(2, $hello->TabHello());

    }
}