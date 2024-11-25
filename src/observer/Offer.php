<?php

namespace Yghareb\DesignPatterns\observer;

class Offer
{



    public  function __construct( private  string $messege)
    {

    }


    public function getMessage()
    {
        return $this->messege;
    }

    public function setMessage($messege): void
    {
        $this->messege = $messege;
    }




}