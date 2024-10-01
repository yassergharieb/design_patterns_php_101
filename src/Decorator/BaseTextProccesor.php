<?php
namespace  Yghareb\DesignPatterns\Decorator;
use Yghareb\DesignPatterns\Decorator\TextProccesorInterface;

 class BaseTextProccesor implements TextProccesorInterface { 


    public function proccesText(string $string) :string {
        return $string;
    }
}