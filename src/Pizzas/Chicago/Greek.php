<?php

namespace AMacSmith\FactoryPattern\Pizzas\Chicago;

use AMacSmith\FactoryPattern\Pizza;

class Greek extends Pizza
{
    /**
     * Greek constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Pizza Greek Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Chicago Greek';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices'.PHP_EOL;
    }
}