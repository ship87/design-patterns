<?php
/**
 * Паттерн Абстрактная фабрика — это порождающий паттерн проектирования, который позволяет создавать семейства связанных объектов,
 * не привязываясь к конкретным классам создаваемых объектов.
 */
require_once '../../vendor/autoload.php';

use Creational\AbstractFactory\AbstractFactoryInterface;
use Creational\AbstractFactory\ConcreteFactory1;
use Creational\AbstractFactory\ConcreteFactory2;

function clientCode(AbstractFactoryInterface $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "<br>";
    echo $productB->anotherUsefulFunctionB($productA) . "<br>";
}

/**
 * Клиентский код может работать с любым конкретным классом фабрики.
 */
echo "Client: Testing client code with the first factory type:" . "<br>";
clientCode(new ConcreteFactory1());

echo "<br>";

echo "Client: Testing the same client code with the second factory type:" . "<br>";
clientCode(new ConcreteFactory2());