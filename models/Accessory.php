<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    private $material;
    private $size;

    public function __construct($title, $image, $price, $material, $size = 'ND')
    {
        parent::__construct($title, $image, $price);
        $this->setMaterial($material);
        $this->setSize($size);
    }

    // material
    public function getMaterial()
    {
        return 'Materiale: ' . $this->material;
    }

    public function setMaterial($material)
    {
        if (!strlen($material)) return;
        else $this->material = $material;
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
