<?php
/**
 * Паттерн Посредник заставляет объекты общаться не напрямую друг с другом, а через отдельный объект-посредник,
 * который знает, кому нужно перенаправить тот или иной запрос. Благодаря этому,
 * компоненты системы будут зависеть только от посредника, а не от десятков других компонентов.
 */
require_once '../../vendor/autoload.php';

use Behavioral\Mediator\Component1;
use Behavioral\Mediator\Component2;
use Behavioral\Mediator\ConcreteMediator;

$c1 = new Component1();
$c2 = new Component2();
$mediator = new ConcreteMediator($c1, $c2);

echo "Client triggers operation A." . "<br>";
$c1->doA();

echo "<br>";
echo "Client triggers operation D." . "<br>";
$c2->doD();