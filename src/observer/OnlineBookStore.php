<?php

namespace Yghareb\DesignPatterns\observer;

class OnlineBookStore
{
     public  array $books =  [];

     public array $users =  [];
    public array $offers =  [];


    public function __construct(Book $book, User $user , Offer $offer)
    {
        $this->addBook($book);
//        var_dump($this->users);
//        die();
        $this->addUser($user);
        $this->addOffer($offer);
    }


    public  function  addBook(Book $book)
     {
         $this->books[]  =  $book;
         $this->notifyUserForNewBook($book);
     }



     private function notifyUserForNewBook(Book $book)
     {
         $users  =  $this->getUsers();

         foreach ($users as $user) {
             if (!$user->isIsSubscribedToNewArrivalBooks()) {
                 return;
             }

             $user->notifyNewBook($book);
         }
     }

    private function notifyUserForNewOffer(Offer $offer)
    {
        $users  =  $this->getUsers();

        foreach ($users as $user) {
            if (!$user->isIsSubscribedToNewOffers()) {
                return;
            }

            $user->notifyNewOffer($offer);
        }
    }

     public function  getBooks()
     {
         return $this->books;
     }



    public  function  addUser(User $user)
    {
        $this->users[]  =  $user;


    }


    public function  getUsers()
    {
        return $this->users;
    }

    public function addOffer(Offer $offer)
    {

        $this->offers[]  =  $offer;
        $this->notifyUserForNewOffer($offer);
    }
}