<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 15:37
 */

namespace Aston\test;


use Aston\cart\Product;
use PHPUnit\Framework\TestCase;

class productTest extends TestCase
{
    public function testConstructor(){
        $p = new Product(0, "coca", 3.5);
        $this->assertEquals("coca", $p->getLabel());
        $this->assertEquals(3.5, $p->getPrice());
    }

    public function testSetLabel(){
        $p = new Product(0, "coca", 3.5);
        $this->assertEquals("coca light", $p->setLabel("coca light")->getLabel());
    }
    public function testSetPrice(){
        $p = new Product(0, "coca", 3.5);
        $this->assertEquals(2.75, $p->setPrice(2.75)->getPrice());
    }
    public function testSetId(){
        $p = new Product(1, "coca", 3.5);
        $this->assertEquals(3, $p->setId(3)->getId());
    }
    public function test__toString()
    {
        $p = new Product(1, "coca", 3.5);
        $this->assertEquals("coca", $p);

    }
}