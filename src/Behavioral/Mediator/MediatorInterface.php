<?php

namespace Behavioral\Mediator;

interface MediatorInterface
{
    public function notify(object $sender, string $event): void;
}