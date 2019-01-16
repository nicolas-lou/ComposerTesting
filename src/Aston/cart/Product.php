<?php


namespace Aston\cart;

class Product
{
    /**
     * @var mixed
     */
    private $id;
    /**
     * @var string
     */
    private $label;
    /**
     * @var float
     */
    private $price ;



    /**
     * Product constructor.
     * @param $id
     * @param $label
     * @param $price
     */
    public function __construct($id,$label, $price)
    {
        $this->id = $id;
        $this->label = $label;
        $this->price = $price;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Product
     */
    public function setLabel(string $label): Product
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price): Product
    {
        $this->price = $price;
        return $this;
    }



    /**
     * @return string
     */
    public function __toString()
    {
        return $this->label;
    }
}
