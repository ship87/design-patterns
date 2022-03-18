<?php
/**
 * Паттерн Строитель предлагает вынести конструирование объекта за пределы его собственного класса,
 * поручив это дело отдельным объектам, называемым строителями. Строитель позволяет создавать сложные объекты пошагово.
 * Промежуточный результат всегда остаётся защищён. Паттерн предлагает разбить процесс конструирования объекта на
 * отдельные шаги (например, построитьСтены, вставитьДвери и другие). Чтобы создать объект, вам нужно поочерёдно
 * вызывать методы строителя. Причём не нужно запускать все шаги, а только те, что нужны для производства объекта определённой конфигурации
 */
require_once '../../vendor/autoload.php';

use Creational\Builder\Director;
use Creational\Builder\ConcreteBuilder1;

function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);

    echo "Standard basic product:" . "<br>";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:" . "<br>";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();

    echo "Custom product:" . "<br>";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);