<?php

namespace Creational\AbstractFactory;

class ConcreteProductB1 implements AbstractProductBInterface
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(AbstractProductAInterface $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}