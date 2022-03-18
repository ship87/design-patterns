<?php
/**
 * Паттерн Заместитель предлагает создать новый класс-дублёр, имеющий тот же интерфейс, что и оригинальный служебный объект.
 * При получении запроса от клиента объект-заместитель сам создает экземпляр служебного объекта и переадресовывет ему всю реальную работу.
 */
require_once '../../vendor/autoload.php';

use Structural\Proxy\SubjectInterface;
use Structural\Proxy\RealSubject;
use Structural\Proxy\Proxy;

function clientCode(SubjectInterface $subject)
{
    // ...

    $subject->request();
    // ...
}

echo "Client: Executing the client code with a real subject:" . "<br>";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "<br>";

echo "Client: Executing the same client code with a proxy:" . "<br>";
$proxy = new Proxy($realSubject);
clientCode($proxy);