<?php
/**
 * Паттерн Шаблонный метод предлагает разбить алгоритм на последовательность шагов, описать эти шаги в отдельных методах
 * и вызывать их в одном шаблонном методе друг за другом. Это позволит подклассам переопределять некоторые шаги алгоритма,
 * оставляя без изменений его структуру и остальные шаги, которые для этого подкласса не так важны.
 */
require_once '../../vendor/autoload.php';

use Behavioral\TemplateMethod\AbstractClass;
use Behavioral\TemplateMethod\ConcreteClass1;
use Behavioral\TemplateMethod\ConcreteClass2;

function clientCode(AbstractClass $class)
{
    // ...
    $class->templateMethod();
    // ...
}

echo "Same client code can work with different subclasses:"."<br>";
clientCode(new ConcreteClass1());
echo "<br>";

echo "Same client code can work with different subclasses:"."<br>";
clientCode(new ConcreteClass2());