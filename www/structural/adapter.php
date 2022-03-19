<?php
/**
 * Паттерн Адаптер - это объект-переводчик, который трансформирует интерфейс или данные одного объекта в такой вид,
 * чтобы он стал понятен другому объекту. При этом адаптер оборачивает один из объектов, так что другой объект даже не знает о наличии первого.
 */
require_once '../../vendor/autoload.php';

use Structural\Adapter\Target;
use Structural\Adapter\Adaptee;
use Structural\Adapter\Adapter;

function clientCode(Target $target)
{
    echo $target->request();
}

echo "Client: I can work just fine with the Target objects:" . "<br>";
$target = new Target();
clientCode($target);
echo "<br><br>";

$adaptee = new Adaptee();
echo "Client: The Adaptee class has a weird interface. See, I don't understand it:" . "<br>";
echo "Adaptee: " . $adaptee->specificRequest();
echo "<br><br>";

echo "Client: But I can work with it via the Adapter:" . "<br>";
$adapter = new Adapter($adaptee);
clientCode($adapter);