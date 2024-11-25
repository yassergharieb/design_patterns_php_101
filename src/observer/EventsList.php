<?php

namespace Yghareb\DesignPatterns\observer;

enum EventsList :  string
{
    case NEW_OFFER = 'new_offer';
    case NEW_PRODUCT = 'new_product';
}
