<?php

namespace AMacSmith\FactoryPattern;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Preparing $this->name".PHP_EOL;
        echo "Tossing {$this->dough} dough...".PHP_EOL;
        echo "Adding {$this->sauce} sauce...".PHP_EOL;
        echo 'Adding toppings: ';
        foreach ($this->toppings as $topping) {
            echo $topping.', ';
        }
        echo PHP_EOL;
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350'.PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices'.PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box'.PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
}