<?php

namespace AMacSmith\FactoryPattern\Pizzas\NewYork;

use AMacSmith\FactoryPattern\Pizza;

class Greek extends Pizza
{
    /**
     * Greek constructor.
     */
    public function __construct()
    {
        $this->name = 'New York Style sauce and Greek Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'New York Greek';
    }
}
