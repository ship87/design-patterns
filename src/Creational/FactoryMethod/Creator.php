<?php

namespace Creational\FactoryMethod;

abstract class Creator
{
    abstract public function factoryMethod(): ProductInterface;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();
        $result = "Creator: The same creator's code has just worked with " . $product->operation();

        return $result;
    }
}