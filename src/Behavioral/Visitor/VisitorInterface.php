<?php

namespace Behavioral\Visitor;

interface VisitorInterface
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}