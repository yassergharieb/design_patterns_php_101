<?php

namespace Yghareb\DesignPatterns\observer;

class OnlineBookStore
{
     public  array $books =  [];

     public array $subscribers =  [];
    public array $offers =  [];


    public function __construct()
    {
//        $this->addBook($book);
//        $this->subscribe($user , $event);
//        $this->addOffer($offer);
        $this->initSubscribersEvents();
    }


    public  function  addBook(Book $book)
     {
         $this->books[]  =  $book;
         $this->notifySubscribers(   EventsList::NEW_PRODUCT ,   "new book is just arrived  " .  $book->getName() ." ".  "price :" .  $book->getPrice());     }

    public function addOffer(Offer $offer)
    {

        $this->offers[]  =  $offer;
        $this->notifySubscribers(   EventsList::NEW_OFFER ,   $offer->getMessage());
    }


    public function notifySubscribers($event , $message)
    {
        foreach ( $this->subscribers[$event->value] as $subscriber )  {
            $subscriber->notify($message);
        }
    }


     public function  getBooks()
     {
         return $this->books;
     }



    public  function  subscribe(Subscriber  $user , array $events  )
    {

        foreach ($events as $event) {
            $this->subscribers[$event->value][]  =  $user;
        }



    }


    public function  initSubscribersEvents()
    {
          $this->subscribers  =  [
                   EventsList::NEW_OFFER->value =>  [],
                   EventsList::NEW_PRODUCT->value => []
          ];
    }
}