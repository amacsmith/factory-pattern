<?php

namespace AMacSmith\FactoryPattern\Pizzas\California;

use AMacSmith\FactoryPattern\Pizza;

class Greek extends Pizza
{
    /**
     * Greek constructor.
     */
    public function __construct()
    {
        $this->name = 'California Pizza Greek Pizza';
        $this->dough = 'Cracker Dough';
        $this->sauce = 'Cream Sauce';

        $this->toppings[] = 'California Greek';
    }

    public function bake(): void
    {
        echo 'Bake for 35 minutes at 250'.PHP_EOL;
    }
}
