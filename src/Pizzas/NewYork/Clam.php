<?php

namespace AMacSmith\FactoryPattern\Pizzas\NewYork;

use AMacSmith\FactoryPattern\Pizza;

class Clam extends Pizza
{
    /**
     * Cheese constructor.
     */
    public function __construct()
    {
        $this->name = 'New York Style sauce and Clam Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'New York Clams';
    }
}