<?php 

namespace Yghareb\DesignPatterns\Decorator;

use Yghareb\DesignPatterns\Decorator\TextProccesorDecorator;

class UnderlineTextProccesor extends TextProccesorDecorator {

    public function  proccesText(string $string): string
    {
          return "this will be underline text" . $string;
    }
}