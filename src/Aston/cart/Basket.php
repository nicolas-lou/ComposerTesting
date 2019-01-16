<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 15:35
 */

namespace Aston\cart;

class Basket implements \Countable
{
    /**
     * @var array
     */
    private $BasketProducts=[];
    private $quantity = [];



    public function __construct()
    {
        $this->reset();
    }


    public function addProduct(Product $product): Basket
    {
        if (!array_key_exists($product->getId(), $this->BasketProducts)) {
            $this->BasketProducts[$product->getId()]= $product;
            $this->quantity[$product->getId()]=0;
        }
        $this->quantity[$product->getId()]++;

        return $this;
    }


    public function removeProduct(Product $product)
    {
        if (array_key_exists($product->getId(), $this->BasketProducts)) {
            if ($this->quantity[$product->getId()]==1) {
                unset($this->quantity[$product->getId()]);
                unset($this->BasketProducts[$product->getId()]);
            } else {
                $this->quantity[$product->getId()]--;
            }
        }
        return $this;
    }

    /**
     * @param Product $product
     * @return bool
     */
    public function hasProduct(Product $product):bool
    {
        return array_key_exists( $product->getId(), $this->BasketProducts);
    }

    /**
     * @return $this
     */
    public function reset():Basket
    {
        $this->BasketProducts = [];
        $this->quantity= [];
        return $this;
    }

    /**
     * @param Product $produit
     * @return $this
     */
    public function clearProduct(Product $produit):Basket
    {
        unset($this->BasketProducts[$produit->getId()]);
        unset($this->quantity[$produit->getId()]);
        return $this;
    }


    /**
     * @return array
     */
    public function getBasketProducts(): array
    {
        return $this->BasketProducts;
    }

    /**
     * @param array $BasketProducts
     * @return basket
     */
    public function setBasketProducts(array $BasketProducts): basket
    {
        $this->BasketProducts = $BasketProducts;
        return $this;
    }


    /**
     * @param Product $product
     * @return $this
     */
    public function setProduct(Product $product):Basket
    {
        $this->BasketProducts[$product->getId()]= $product;
        return $this;
    }


    /**
     * @param Product $produit
     * @return $this
     */
    public function setQuantity(Product $produit, $qty):Basket
    {
        $this->quantity[$produit->getId()]= $qty;
        return $this;
    }

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->BasketProducts);
    }

    public function quantityProduct(Product $product)
    {

            return $this->quantity[$product->getId()];
    }
}
