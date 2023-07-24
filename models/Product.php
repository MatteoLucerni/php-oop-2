<?php

class Product
{
    private $title;
    private $image;
    private $price;

    public function __construct($title, $image, $price)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setPrice($price);
    }

    // title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        if (!strlen($title)) return;
        else $this->title = $title;
    }

    // image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        if (!$image) return;
        else $this->image = $image;
    }

    // price
    public function getPrice()
    {
        return '€ ' . $this->price;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0) return;
        else $this->price = $price;
    }
}
