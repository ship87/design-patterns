<?php

namespace Creational\Builder;

interface BuilderInterface
{
    public function producePartA(): void;

    public function producePartB(): void;

    public function producePartC(): void;
}
