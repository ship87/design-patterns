<?php
/**
 * Идея паттерна Итератор состоит в том, чтобы вынести поведение обхода коллекции из самой коллекции в отдельный класс.
 * Итераторы содержат код обхода коллекции. Одну коллекцию могут обходить сразу несколько итераторов.
 * Объект-итератор будет отслеживать состояние обхода, текущую позицию в коллекции и сколько элементов ещё осталось обойти.
 * Одну и ту же коллекцию смогут одновременно обходить различные итераторы, а сама коллекция не будет даже знать об этом.
 * К тому же, если вам понадобится добавить новый способ обхода, вы сможете создать отдельный класс итератора, не изменяя существующий код коллекции.
 */
require_once '../../vendor/autoload.php';

use Behavioral\Iterator\WordsCollection;

$collection = new WordsCollection();
$collection->addItem("First");
$collection->addItem("Second");
$collection->addItem("Third");

echo "Straight traversal:" . "<br>";
foreach ($collection->getIterator() as $item) {
    echo $item . "<br>";
}

echo "<br>";
echo "Reverse traversal:." . "<br>";
foreach ($collection->getReverseIterator() as $item) {
    echo $item . "<br>";
}