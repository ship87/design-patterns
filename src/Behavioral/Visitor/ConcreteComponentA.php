<?php

namespace Behavioral\Visitor;

class ConcreteComponentA implements ComponentInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitConcreteComponentA($this);
    }

    public function exclusiveMethodOfConcreteComponentA(): string
    {
        return "A";
    }
}