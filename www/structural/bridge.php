<?php
/**
 * Паттерн Мост предлагает заменить наследование агрегацией или композицией. Для этого нужно выделить одну из таких «плоскостей»
 * в отдельную иерархию и ссылаться на объект этой иерархии, вместо хранения его состояния и поведения внутри одного класса.
 */
require_once '../../vendor/autoload.php';

use Structural\Bridge\Abstraction;
use Structural\Bridge\ConcreteImplementationA;
use Structural\Bridge\ConcreteImplementationB;
use Structural\Bridge\ExtendedAbstraction;

function clientCode(Abstraction $abstraction)
{
    // ...

    echo $abstraction->operation();
    // ...
}

$implementation = new ConcreteImplementationA();
$abstraction = new Abstraction($implementation);
clientCode($abstraction);

echo "<br>";

$implementation = new ConcreteImplementationB();
$abstraction = new ExtendedAbstraction($implementation);
clientCode($abstraction);