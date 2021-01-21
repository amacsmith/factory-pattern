<?php

namespace AMacSmith\FactoryPattern\Pizzas\California;

use AMacSmith\FactoryPattern\Pizza;

class Cheese extends Pizza
{
    /**
     * Cheese constructor.
     */
    public function __construct()
    {
        $this->name = 'California Pizza Cheese Pizza';
        $this->dough = 'Cracker Dough';
        $this->sauce = 'Cream Sauce';

        $this->toppings[] = 'California Colby Jack';
    }

    public function bake(): void
    {
        echo 'Bake for 35 minutes at 250'.PHP_EOL;
    }
}
