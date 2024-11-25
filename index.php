<?php

use Yghareb\DesignPatterns\Decorator\BaseTextProccesor;
use Yghareb\DesignPatterns\Decorator\HtmlTagsProccesor;
use Yghareb\DesignPatterns\Decorator\UnderlineTextProccesor;
use Yghareb\DesignPatterns\observer\Book;
use Yghareb\DesignPatterns\observer\Offer;
use Yghareb\DesignPatterns\observer\OnlineBookStore;
use Yghareb\DesignPatterns\observer\User;

require "vendor/autoload.php";


//$text =  "hello decorator";
//
//$baseTextProcessor  =  new BaseTextProccesor();
//
//$htmlTextProccesor =  new HtmlTagsProccesor($baseTextProcessor);
//
//$underLineText     = new UnderlineTextProccesor($htmlTextProccesor);
//
//echo  $htmlTextProccesor->proccesText($text);
//echo $underLineText->proccesText($tex
//);


$onlineMrket =  new OnlineBookStore(
    new  Book('novel' ,  100) ,
    new  User('yasser' , true , true) ,
    new Offer('DISCOUNT OF 30%')
);

echo   $onlineMrket->addBook(new Book("book2" ,  100));
echo   $onlineMrket->addOffer(new Offer("new offer begin" ));
