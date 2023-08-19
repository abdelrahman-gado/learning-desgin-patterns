<?php

declare(strict_types=1);

// This code breaks the interface segregation principle because the OnlineClientImpl is
// forced to implement methods that it will never use

// Also the RestaurantInterface breaks the Single Responsibility principle because
// it has many responsibilities like paying and taking orders
interface RestaurantInterface
{
    public function acceptOnlineOrder(): void;
    public function takeTelephoneOrder(): void;
    public function payOnline(): void;
    public function walkInCustomerOrder(): void;
    public function payInPerson(): void;
}

// online customer that will use only payOnline and acceptOnlineOrder
class OnlineClientImpl implements ResturantInterface
{

}