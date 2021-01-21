<?php

namespace AMacSmith\FactoryPattern\Pizzas\NewYork;

use AMacSmith\FactoryPattern\Pizza;

class Veggie extends Pizza
{
    /**
     * Veggie constructor.
     */
    public function __construct()
    {
        $this->name = 'New York Style sauce and Veggie Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'New York Veggie';
    }
}
