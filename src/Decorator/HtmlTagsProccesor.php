<?php 

namespace Yghareb\DesignPatterns\Decorator;

use Yghareb\DesignPatterns\Decorator\TextProccesorDecorator;


class HtmlTagsProccesor extends TextProccesorDecorator {

    public function proccesText(string $string ): string 
    {
        return "<h1>" .  $string . "</h1>";  
    }
} 