<?php

use Yghareb\DesignPatterns\Decorator\BaseTextProccesor;
use Yghareb\DesignPatterns\Decorator\HtmlTagsProccesor;
use Yghareb\DesignPatterns\Decorator\UnderlineTextProccesor;

require "vendor/autoload.php";


$text =  "hello decorator";

$baseTextProcessor  =  new BaseTextProccesor();

$htmlTextProccesor =  new HtmlTagsProccesor($baseTextProcessor);

$underLineText     = new UnderlineTextProccesor($htmlTextProccesor);

echo  $htmlTextProccesor->proccesText($text);
echo $underLineText->proccesText($text);