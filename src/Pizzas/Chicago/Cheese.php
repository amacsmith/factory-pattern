<?php

namespace AMacSmith\FactoryPattern\Pizzas\Chicago;

use AMacSmith\FactoryPattern\Pizza;

class Cheese extends Pizza
{
    /**
     * Cheese constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Pizza Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices'.PHP_EOL;
    }
}
