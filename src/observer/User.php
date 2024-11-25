<?php

namespace Yghareb\DesignPatterns\observer;

class User
{





    public   function   __construct(
        private  string $name ,
        private  bool $is_subscribed_to_new_arrival_books ,
        private  bool $is_subscribed_to_new_offers
     )

    {

    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function isIsSubscribedToNewArrivalBooks(): bool
    {
        return $this->is_subscribed_to_new_arrival_books;
    }

    public function setIsSubscribedToNewArrivalBooks(bool $is_subscribed_to_new_arrival_books): void
    {
        $this->is_subscribed_to_new_arrival_books = $is_subscribed_to_new_arrival_books;
    }

    public function isIsSubscribedToNewOffers(): bool
    {
        return $this->is_subscribed_to_new_offers;
    }

    public function setIsSubscribedToNewOffers(bool $is_subscribed_to_new_offers): void
    {
        $this->is_subscribed_to_new_offers = $is_subscribed_to_new_offers;
    }

    public function  notifyNewBook( Book $book)
    {
        echo   "HI  " . $this->name . " new Book \"" .  $book->getName() .  "\" just arrived";
    }


    public function  notifyNewOffer( Offer $offer)
    {
        echo   "HI " . $this->name . " new offer " .  $offer->getMessage() .  " is added ";
    }


}