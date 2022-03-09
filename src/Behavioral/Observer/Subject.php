<?php

namespace Behavioral\Observer;

class Subject implements \SplSubject
{
    public $state;

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        echo "Subject: Attached an observer." . "<br>";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer." . "<br>";
    }

    public function notify(): void
    {
        echo "Subject: Notifying observers..." . "<br>";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void
    {
        echo "<br>" . "Subject: I'm doing something important." . "<br>";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}" . "<br>";
        $this->notify();
    }
}
