<?php

namespace Creational\FactoryMethod;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct2();
    }
}