<?php

namespace AMacSmith\FactoryPattern;

abstract class PizzaStore
{
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }

    abstract public function createPizza(string $type): Pizza;
}