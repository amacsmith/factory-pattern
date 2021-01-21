<?php

namespace AMacSmith\FactoryPattern;

abstract class Pizza
{
    private string $name;
    private string $dough;
    private string $sauce;
    private array $toppings = [];

    public function prepare(): void
    {
        echo "Prepare pizza";
    }

    public function bake(): void
    {
        echo 'bake pizza';
    }

    public function cut(): void
    {
        echo 'cut pizza';
    }

    public function box(): void
    {
        echo 'box pizza';
    }
}