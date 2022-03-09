<?php

namespace Behavioral\Strategy;

class StrategyA implements StrategyInterface
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}