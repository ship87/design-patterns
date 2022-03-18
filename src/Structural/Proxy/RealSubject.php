<?php

namespace Structural\Proxy;

class RealSubject implements SubjectInterface
{
    public function request(): void
    {
        echo "RealSubject: Handling request." . "<br>";
    }
}