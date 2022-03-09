<?php
/**
 * Паттерн Наблюдатель предлагает хранить внутри объекта издателя список ссылок на объекты подписчиков,
 * причём издатель не должен вести список подписки самостоятельно. Он предоставит методы, с помощью которых
 * подписчики могли бы добавлять или убирать себя из списка.
 * Давайте называть Издателями те объекты, которые содержат важное или интересное для других состояние.
 * Остальные объекты, которые хотят отслеживать изменения этого состояния, назовём Подписчиками.
 */
require_once '../../vendor/autoload.php';

use Behavioral\Observer\Subject;
use Behavioral\Observer\ConcreteObserverA;
use Behavioral\Observer\ConcreteObserverB;

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();