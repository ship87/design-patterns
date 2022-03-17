<?php

namespace Creational\FactoryMethod;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct1();
    }
}