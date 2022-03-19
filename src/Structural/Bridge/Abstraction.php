<?php

namespace Structural\Bridge;

class Abstraction
{
    protected $implementation;

    public function __construct(ImplementationInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation(): string
    {
        return "Abstraction: Base operation with:" . "<br>" .
            $this->implementation->operationImplementation();
    }
}