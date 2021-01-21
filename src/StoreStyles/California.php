<?php

namespace AMacSmith\FactoryPattern\StoreStyles;

use AMacSmith\FactoryPattern\Pizza;
use AMacSmith\FactoryPattern\PizzaStore;

class California extends PizzaStore
{

    /**
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        switch (strtolower($type)){
            case 'cheese':
                return new
                break;
            case 'clam':

                break;
            case 'greek':

                break;
            case 'veggie':

                break;
        }
    }
}