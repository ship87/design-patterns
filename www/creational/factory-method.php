<?php
/**
 * Паттерн Фабричный метод предлагает создавать объекты не напрямую, используя оператор new, а через вызов особого фабричного метода.
 * Появляется вохможность переопределить фабричный метод в подклассе, чтобы изменить тип создаваемого продукта.
 * Все возвращаемые объекты должны иметь общий интерфейс. Подклассы смогут производить объекты различных классов,
 * следующих одному и тому же интерфейсу.
 */
require_once '../../vendor/autoload.php';

use Creational\FactoryMethod\Creator;
use Creational\FactoryMethod\ConcreteCreator1;
use Creational\FactoryMethod\ConcreteCreator2;

function clientCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works." . "<br>"
        . $creator->someOperation();
    // ...
}

echo "App: Launched with the ConcreteCreator1." . "<br>";
clientCode(new ConcreteCreator1());
echo "<br><br>";

echo "App: Launched with the ConcreteCreator2." . "<br>";
clientCode(new ConcreteCreator2());