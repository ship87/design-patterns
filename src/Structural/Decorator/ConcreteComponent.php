<?php

namespace Structural\Decorator;

class ConcreteComponent implements ComponentInterface
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}