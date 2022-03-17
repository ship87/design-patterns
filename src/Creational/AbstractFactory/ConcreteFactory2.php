<?php

namespace Creational\AbstractFactory;

class ConcreteFactory2 implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductAInterface
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductBInterface
    {
        return new ConcreteProductB2();
    }
}