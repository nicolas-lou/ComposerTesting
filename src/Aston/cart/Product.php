<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14/01/19
 * Time: 15:36
 */

namespace Aston\cart;


class product
{
   private $label=null;
   private $price = null;
   private $qty = null;

    public function __construct($label, $price, $qty ){
        $this->label = $label;
        $this->price = $price;
        $this->qty = $qty;
    }

    /**
     * @return null
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return null
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param null $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }






}