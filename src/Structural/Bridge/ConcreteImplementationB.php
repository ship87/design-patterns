<?php

namespace Structural\Bridge;

class ConcreteImplementationB implements ImplementationInterface
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B." . "<br>";
    }
}