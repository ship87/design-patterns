<?php

namespace Creational\AbstractFactory;

class ConcreteProductA1 implements AbstractProductAInterface
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}