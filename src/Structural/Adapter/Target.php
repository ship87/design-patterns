<?php

namespace Structural\Adapter;

class Target
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}
