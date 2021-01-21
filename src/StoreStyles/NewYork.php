<?php

namespace AMacSmith\FactoryPattern\StoreStyles;

use AMacSmith\FactoryPattern\Pizza;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Cheese;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Clam;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Greek;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Veggie;
use AMacSmith\FactoryPattern\PizzaStore;
use RuntimeException;

class NewYork extends PizzaStore
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
