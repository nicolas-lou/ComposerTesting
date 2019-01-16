<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 15:37
 */

namespace Aston\test;


use Aston\cart\Basket;
use Aston\cart\Product;
use PHPUnit\Framework\TestCase;

class basketTest extends TestCase
{
    public function testLabel(){
        $b = new Basket();
        $b->addProduct(new Product(2,"coca",3.5));
        $this->assertEquals("coca",$b->getBasketProducts()[2]->getLabel());

    }

    public function testQuantityProduct(){
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $water = new Product(4,"water", 1);
        $nutella = new Product(5,"nutella",4.5);
        $b->addProduct($milk);
        $b->addProduct($milk);
        $b->addProduct($water);
        $b->addProduct($water);

        $b->removeProduct($water);
        $b->removeProduct($milk);
        $b->addProduct($nutella);
        $this->assertEquals(3,$b->count());
        $this->assertEquals(1,$b->QuantityProduct($water));
    }

    public function testRemoveProduct(){
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $b->addProduct($milk);
        $b->removeProduct($milk);
        $this->assertEquals($b ,$b->removeProduct($milk));

    }
    public function testHasProduct(){
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $b->addProduct($milk);
        $this->assertTrue($b->hasProduct($milk));

    }
    public function testClearProduct(){
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $nutella = new Product(5,"nutella",4.5);
        $b->addProduct($milk);
        $b->addProduct($nutella);
        $this->assertEquals(1,$b->clearProduct($nutella)->count());

    }

    public function testSetProduct(){
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $nutella = new Product(5,"nutella",4.5);
        $b->addProduct($milk);
        $b->addProduct($nutella);
        $this->assertEquals(2,$b->setProduct($nutella)->count());

    }

    public function testSetQuantity(){
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $nutella = new Product(5,"nutella",4.5);
        $b->addProduct($milk);
        $b->addProduct($nutella);
        $this->assertEquals(3,$b->setQuantity($nutella, 3)->QuantityProduct($nutella));

    }

    public function testSetBasketProduct(){
        $a = new Basket();
        $b = new Basket();
        $milk = new Product(3,"milk",2);
        $nutella = new Product(5,"nutella",4.5);
        $b->addProduct($milk);
        $b->addProduct($nutella);
        $a->setBasketProducts($b->getBasketProducts());
        $this->assertEquals(2,$a->count());

    }

}