<?php
namespace Yghareb\DesignPatterns\Decorator;
use Yghareb\DesignPatterns\Decorator\TextProccesorInterface;

class TextProccesorDecorator implements TextProccesorInterface {


    public function __construct(public TextProccesorInterface $textProccesorInterface)
    {
        
    }
    public function proccesText(string $string): string
    {
       return  $this->textProccesorInterface->proccesText($string);
    }
}