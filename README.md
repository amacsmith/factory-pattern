Factory pattern

Implementation of the factory pattern.

[![Build Status](https://travis-ci.org/amacsmith/factory-pattern.svg?branch=main)](https://travis-ci.org/amacsmith/factory-pattern)

[![codecov](https://codecov.io/gh/amacsmith/factory-pattern/branch/main/graph/badge.svg)](https://codecov.io/gh/amacsmith/factory-pattern)

![StyleCI](https://github.styleci.io/repos/331349107/shield?branch=main)

Usage

```
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
```
