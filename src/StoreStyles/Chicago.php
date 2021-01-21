<?php

namespace AMacSmith\FactoryPattern\StoreStyles;

use AMacSmith\FactoryPattern\Pizza;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Cheese;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Clam;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Greek;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Veggie;
use AMacSmith\FactoryPattern\PizzaStore;
use RuntimeException;

class Chicago extends PizzaStore
{
    /**
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new Cheese();
                break;
            case 'clam':
                return new Clam();
                break;
            case 'greek':
                return new Greek();
                break;
            case 'veggie':
                return new Veggie();
                break;
            default:
                throw new RuntimeException("We don't serve that type of pizza");
        }
    }
}
