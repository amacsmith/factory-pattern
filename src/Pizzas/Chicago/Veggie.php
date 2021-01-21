<?php

namespace AMacSmith\FactoryPattern\Pizzas\Chicago;

use AMacSmith\FactoryPattern\Pizza;

class Veggie extends Pizza
{
    /**
     * Veggie constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Pizza Veggie Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Chicago Veggie';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices'.PHP_EOL;
    }
}
