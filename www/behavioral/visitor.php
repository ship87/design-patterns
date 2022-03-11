<?php

/**
 * Паттерн Посетитель предлагает разместить новое поведение в отдельном классе, вместо того чтобы множить его сразу в нескольких классах.
 * Объекты, с которыми должно было быть связано поведение, не будут выполнять его самостоятельно.
 * Вместо этого вы будете передавать эти объекты в методы посетителя.
 */
require_once '../../vendor/autoload.php';

use Behavioral\Visitor\VisitorInterface;
use Behavioral\Visitor\ConcreteComponentA;
use Behavioral\Visitor\ConcreteComponentB;
use Behavioral\Visitor\ConcreteVisitor1;
use Behavioral\Visitor\ConcreteVisitor2;

function clientCode(array $components, VisitorInterface $visitor)
{
    // ...
    foreach ($components as $component) {
        $component->accept($visitor);
    }
    // ...
}

$components = [
    new ConcreteComponentA(),
    new ConcreteComponentB(),
];

echo "The client code works with all visitors via the base Visitor interface:" . "<br>";
$visitor1 = new ConcreteVisitor1();
clientCode($components, $visitor1);
echo "<br>";

echo "It allows the same client code to work with different types of visitors:" . "<br>";
$visitor2 = new ConcreteVisitor2();
clientCode($components, $visitor2);