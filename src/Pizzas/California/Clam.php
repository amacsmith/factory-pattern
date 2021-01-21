<?php

namespace AMacSmith\FactoryPattern\Pizzas\California;

use AMacSmith\FactoryPattern\Pizza;

class Clam extends Pizza
{
    /**
     * Clam constructor.
     */
    public function __construct()
    {
        $this->name = 'California Pizza Clam Pizza';
        $this->dough = 'Cracker Dough';
        $this->sauce = 'Cream Sauce';

        $this->toppings[] = 'California Clam';
    }

    public function bake(): void
    {
        echo 'Bake for 35 minutes at 250'.PHP_EOL;
    }
}
