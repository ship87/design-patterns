<?php

namespace Behavioral\Visitor;

class ConcreteComponentB implements ComponentInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}