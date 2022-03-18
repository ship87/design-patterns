<?php

namespace Creational\Builder;

class Product1
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "<br><br>";
    }
}