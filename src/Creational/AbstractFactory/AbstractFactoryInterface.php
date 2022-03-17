<?php

namespace Creational\AbstractFactory;

interface AbstractFactoryInterface
{
    public function createProductA(): AbstractProductAInterface;

    public function createProductB(): AbstractProductBInterface;
}