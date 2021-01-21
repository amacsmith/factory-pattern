<?php

namespace AMacSmith\FactoryPattern\StoreStyles;

use AMacSmith\FactoryPattern\Pizza;
use AMacSmith\FactoryPattern\PizzaStore;

class Chicago extends PizzaStore
{

    /**
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        // TODO: Implement createPizza() method.
    }
}