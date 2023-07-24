<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $ingredients;
    private $weight;

    public function __construct($title, $image, $price, $ingredients, $weight)
    {
        parent::__construct($title, $image, $price);
        $this->setIngredients($ingredients);
        $this->setWeight($weight);
    }

    // ingredients
    public function getIngredients()
    {
        $ing_list = '';
        foreach ($this->ingredients as $ing) {
            $ing_list .= $ing . ', ';
        }

        return 'Ingredienti: ' . $ing_list;
    }

    public function setIngredients($ingredients)
    {
        if (!count($ingredients)) return;
        else $this->ingredients = $ingredients;
    }

    // weight
    public function getWeight()
    {
        return 'Peso netto: ' . $this->weight . 'g';
    }

    public function setWeight(int $weight)
    {
        if (!is_numeric($weight) || $weight < 0) return;
        else $this->weight = $weight;
    }
}
