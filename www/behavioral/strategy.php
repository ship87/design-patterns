<?php

/**
 * Паттерн Стратегия предлагает определить семейство схожих алгоритмов, которые часто изменяются или расширяются,
 * и вынести их в собственные классы, называемые стратегиями. Вместо того, чтобы изначальный класс сам выполнял тот или иной алгоритм,
 * он будет играть роль контекста, ссылаясь на одну из стратегий и делегируя ей выполнение работы.
 * Чтобы сменить алгоритм, вам будет достаточно подставить в контекст другой объект-стратегию.
 * Важно, чтобы все стратегии имели общий интерфейс. Используя этот интерфейс, контекст будет независимым от конкретных классов стратегий.
 * С другой стороны, вы сможете изменять и добавлять новые виды алгоритмов, не трогая код контекста.
 */
require_once '../../vendor/autoload.php';

use Behavioral\Strategy\Context;
use Behavioral\Strategy\StrategyA;
use Behavioral\Strategy\StrategyB;

$context = new Context(new StrategyA());
echo "Client: Strategy is set to normal sorting." . "<br>";
$context->doSomeBusinessLogic();

echo "<br>";

echo "Client: Strategy is set to reverse sorting." . "<br>";
$context->setStrategy(new StrategyB());
$context->doSomeBusinessLogic();