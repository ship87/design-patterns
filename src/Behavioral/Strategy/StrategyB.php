<?php

namespace Behavioral\Strategy;

class StrategyB implements StrategyInterface
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}