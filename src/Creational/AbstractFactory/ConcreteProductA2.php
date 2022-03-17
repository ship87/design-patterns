<?php

namespace Creational\AbstractFactory;

class ConcreteProductA2 implements AbstractProductAInterface
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}