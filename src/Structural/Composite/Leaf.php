<?php

namespace Structural\Composite;

class Leaf extends Component
{
    public function operation(): string
    {
        return "Leaf";
    }
}