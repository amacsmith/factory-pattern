<?php

namespace AMacSmith\FactoryPattern\Pizzas\California;

use AMacSmith\FactoryPattern\Pizza;

class Veggie extends Pizza
{
    /**
     * Veggie constructor.
     */
    public function __construct()
    {
        $this->name = 'California Pizza Veggie Pizza';
        $this->dough = 'Cracker Dough';
        $this->sauce = 'Cream Sauce';

        $this->toppings[] = 'California Veggie';
    }

    public function bake(): void
    {
        echo 'Bake for 35 minutes at 250'.PHP_EOL;
    }
}
