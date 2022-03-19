<?php

namespace Structural\Bridge;

class ConcreteImplementationA implements ImplementationInterface
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A." . "<br>";
    }
}