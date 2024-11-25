<?php

namespace Yghareb\DesignPatterns\observer;

class User implements  Subscriber
{





    public   function   __construct(
        private  string $name

     )

    {

    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }





    public function notify(string $message)
    {
        echo   "HI " . $this->name  . $message;

    }
}