<?php 

namespace  Yghareb\DesignPatterns\Decorator;

interface TextProccesorInterface {

    public  function proccesText(string $string): string;
}