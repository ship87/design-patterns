<?php

namespace Behavioral\Visitor;

interface ComponentInterface
{
    public function accept(VisitorInterface $visitor): void;
}
