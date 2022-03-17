<?php

namespace Creational\AbstractFactory;

interface AbstractProductBInterface
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductAInterface $collaborator): string;
}