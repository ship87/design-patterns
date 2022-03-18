<?php
/**
 * Паттерн Одиночка - скрывается конструктор по умолчанию и создается публичный статический метод, который и будет
 * контролировать жизненный цикл объекта-одиночки. Если у вас есть доступ к классу одиночки, значит, будет доступ
 * и к этому статическому методу. Из какой точки кода вы бы его ни вызвали, он всегда будет отдавать один и тот же объект.
 */
require_once '../../vendor/autoload.php';

use Creational\Singleton\Singleton;

function clientCode()
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clientCode();