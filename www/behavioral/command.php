<?php
/**
 * Паттерн Команда предлагает больше не отправлять такие вызовы напрямую. Вместо этого каждый вызов,
 * отличающийся от других, следует завернуть в собственный класс с единственным методом, который и будет осуществлять вызов.
 * Такие объекты называют командами. К объекту интерфейса можно будет привязать объект команды, который знает,
 * кому и в каком виде следует отправлять запросы. Когда объект интерфейса будет готов передать запрос,
 * он вызовет метод команды, а та — позаботится обо всём остальном.
 */
require_once '../../vendor/autoload.php';

use Behavioral\Command\Invoker;
use Behavioral\Command\SimpleCommand;
use Behavioral\Command\Receiver;
use Behavioral\Command\ComplexCommand;

$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();