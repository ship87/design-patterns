<?php

namespace Behavioral\Command;

class Invoker
{
    private $onStart;

    private $onFinish;

    public function setOnStart(CommandInterface $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(CommandInterface $command): void
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        echo "Invoker: Does anybody want something done before I begin?" . "<br>";
        if ($this->onStart instanceof CommandInterface) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important..." . "<br>";

        echo "Invoker: Does anybody want something done after I finish?" . "<br>";
        if ($this->onFinish instanceof CommandInterface) {
            $this->onFinish->execute();
        }
    }
}