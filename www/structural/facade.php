<?php
/**
 * Паттерн Фасад — это простой интерфейс для работы со сложной подсистемой, содержащей множество классов.
 * Фасад может иметь урезанный интерфейс, не имеющий 100% функциональности, которой можно достичь,
 * используя сложную подсистему напрямую. Но он предоставляет именно те фичи, которые нужны клиенту, и скрывает все остальные.
 */
require_once '../../vendor/autoload.php';

use Structural\Facade\Facade;
use Structural\Facade\Subsystem1;
use Structural\Facade\Subsystem2;

function clientCode(Facade $facade)
{
    // ...

    echo $facade->operation();

    // ...
}

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();
$facade = new Facade($subsystem1, $subsystem2);
clientCode($facade);