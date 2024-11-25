<?php

namespace Yghareb\DesignPatterns\observer;

class Book
{
    private  string $name;
    private  float $price;


    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }





}