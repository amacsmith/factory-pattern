<?php

namespace AMacSmith\FactoryPattern\Pizzas\NewYork;

use AMacSmith\FactoryPattern\Pizza;

class Cheese extends Pizza
{
    /**
     * Cheese constructor.
     */
    public function __construct()
    {
        $this->name = 'New York Style sauce and cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}
