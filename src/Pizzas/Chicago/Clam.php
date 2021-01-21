<?php

namespace AMacSmith\FactoryPattern\Pizzas\Chicago;

use AMacSmith\FactoryPattern\Pizza;

class Clam extends Pizza
{
    /**
     * Clam constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Pizza Clam Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Clams';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices'.PHP_EOL;
    }
}
