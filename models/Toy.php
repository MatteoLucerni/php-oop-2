<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private $feature;
    private $size;

    public function __construct($type, $title, $image, $price, $feature, $size = 'ND')
    {
        parent::__construct($type, $title, $image, $price);
        $this->setFeature($feature);
        $this->setSize($size);
    }

    // feature
    public function getFeature()
    {
        return 'Caratteristiche: ' . $this->feature;
    }

    public function setFeature($feature)
    {
        if (!strlen($feature)) return;
        else $this->feature = $feature;
    }

    // size
    public function getSize()
    {
        return 'Dimensioni: ' . $this->size;
    }

    public function setSize($size)
    {
        if (!strlen($size)) return 'ND';
        else $this->size = $size;
    }
}
