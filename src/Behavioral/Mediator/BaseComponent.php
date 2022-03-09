<?php

namespace Behavioral\Mediator;

class BaseComponent
{
    protected $mediator;

    public function __construct(MediatorInterface $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
}