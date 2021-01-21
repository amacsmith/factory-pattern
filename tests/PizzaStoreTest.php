<?php

namespace AMacSmith\FactoryPattern\Tests;

use AMacSmith\FactoryPattern\Pizzas\California\Cheese as CaliforniaCheese;
use AMacSmith\FactoryPattern\Pizzas\California\Clam as CaliforniaClam;
use AMacSmith\FactoryPattern\Pizzas\California\Greek as CaliforniaGreek;
use AMacSmith\FactoryPattern\Pizzas\California\Veggie as CaliforniaVeggie;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Cheese as ChicagoCheese;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Clam as ChicagoClam;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Greek as ChicagoGreek;
use AMacSmith\FactoryPattern\Pizzas\Chicago\Veggie as ChicagoVeggie;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Cheese as NewYorkCheese;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Clam as NewYorkClam;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Greek as NewYorkGreek;
use AMacSmith\FactoryPattern\Pizzas\NewYork\Veggie as NewYorkVeggie;
use AMacSmith\FactoryPattern\PizzaStore;
use AMacSmith\FactoryPattern\StoreStyles\California;
use AMacSmith\FactoryPattern\StoreStyles\Chicago;
use AMacSmith\FactoryPattern\StoreStyles\NewYork;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class PizzaStoreTest extends TestCase
{
    private PizzaStore $newYorkStore;
    private PizzaStore $chicagoStore;
    private PizzaStore $californiaStore;

    public function test_can_make_different_styles_of_pizza()
    {
        $this->newYorkStore = new NewYork();
        $this->chicagoStore = new Chicago();
        $this->californiaStore = new California();

        $pizza = $this->newYorkStore->orderPizza('cheese');
        echo "Ethan ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(NewYorkCheese::class, $pizza);
        $pizza = $this->chicagoStore->orderPizza('cheese');
        echo "Allen ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(ChicagoCheese::class, $pizza);
        $pizza = $this->californiaStore->orderPizza('cheese');
        echo "Betty ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(CaliforniaCheese::class, $pizza);

        $pizza = $this->newYorkStore->orderPizza('clam');
        echo "Ethan ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(NewYorkClam::class, $pizza);
        $pizza = $this->chicagoStore->orderPizza('clam');
        echo "Allen ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(ChicagoClam::class, $pizza);
        $pizza = $this->californiaStore->orderPizza('clam');
        echo "Betty ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(CaliforniaClam::class, $pizza);

        $pizza = $this->newYorkStore->orderPizza('greek');
        echo "Ethan ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(NewYorkGreek::class, $pizza);
        $pizza = $this->chicagoStore->orderPizza('greek');
        echo "Allen ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(ChicagoGreek::class, $pizza);
        $pizza = $this->californiaStore->orderPizza('greek');
        echo "Betty ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(CaliforniaGreek::class, $pizza);

        $pizza = $this->newYorkStore->orderPizza('veggie');
        echo "Ethan ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(NewYorkVeggie::class, $pizza);
        $pizza = $this->chicagoStore->orderPizza('veggie');
        echo "Allen ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(ChicagoVeggie::class, $pizza);
        $pizza = $this->californiaStore->orderPizza('veggie');
        echo "Betty ordered a {$pizza->getName()}".PHP_EOL.PHP_EOL;
        $this->assertInstanceOf(CaliforniaVeggie::class, $pizza);
    }

    public function test_expect_exception_for_type_new_york()
    {
        $this->newYorkStore = new NewYork();

        $this->expectException(RuntimeException::class);
        $pizza = $this->newYorkStore->orderPizza('shrimp');
    }

    public function test_expect_exception_for_type_chicago()
    {
        $this->chicagoStore = new Chicago();

        $this->expectException(RuntimeException::class);
        $pizza = $this->chicagoStore->orderPizza('shrimp');
    }

    public function test_expect_exception_for_type_california()
    {
        $this->californiaStore = new California();

        $this->expectException(RuntimeException::class);
        $pizza = $this->californiaStore->orderPizza('shrimp');
    }
}
