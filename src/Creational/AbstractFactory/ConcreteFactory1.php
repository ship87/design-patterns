<?php

namespace Creational\AbstractFactory;

class ConcreteFactory1 implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductAInterface
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductBInterface
    {
        return new ConcreteProductB1();
    }
}