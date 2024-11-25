<?php

namespace Yghareb\DesignPatterns\observer;

use http\Encoding\Stream;

interface Subscriber
{

    public  function   notify(string $message);

}