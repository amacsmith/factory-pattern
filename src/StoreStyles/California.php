<?php

namespace AMacSmith\FactoryPattern\StoreStyles;

use AMacSmith\FactoryPattern\Pizza;
use AMacSmith\FactoryPattern\Pizzas\California\Cheese;
use AMacSmith\FactoryPattern\Pizzas\California\Clam;
use AMacSmith\FactoryPattern\Pizzas\California\Greek;
use AMacSmith\FactoryPattern\Pizzas\California\Veggie;
use AMacSmith\FactoryPattern\PizzaStore;
use RuntimeException;

class California extends PizzaStore
{

    /**
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        return match (strtolower($type)) {
            'cheese' => new Cheese(),
            'clam' => new Clam(),
            'greek' => new Greek(),
            'veggie' => new Veggie(),
            default => throw new RuntimeException("We don't serve that type of pizza"),
        };
    }
}