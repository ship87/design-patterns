<?php

namespace Behavioral\Strategy;

interface StrategyInterface
{
    public function doAlgorithm(array $data): array;
}