<?php
/**
 * Паттерн Декоратор — это структурный паттерн проектирования,
 * который позволяет динамически добавлять объектам новую функциональность, оборачивая их в полезные «обёртки».
 */
require_once '../../vendor/autoload.php';

use Structural\Decorator\ComponentInterface;
use Structural\Decorator\ConcreteComponent;
use Structural\Decorator\ConcreteDecoratorA;
use Structural\Decorator\ConcreteDecoratorB;

function clientCode(ComponentInterface $component)
{
    // ...

    echo "RESULT: " . $component->operation();

    // ...
}

$simple = new ConcreteComponent();
echo "Client: I've got a simple component:"."<br>";
clientCode($simple);
echo "<br><br>";

$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
echo "Client: Now I've got a decorated component:"."<br>";
clientCode($decorator2);