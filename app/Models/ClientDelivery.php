<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDelivery
{
    private Address $address;
    private Route $route;
    private DeliveryLine $deliveryLine;
    private Delivery $delivery;

    public function __construct(Address $address, Route $route, DeliveryLine $deliveryLine, Delivery $delivery)
    {
        $this->address = $address;
        $this->route = $route;
        $this->deliveryLine = $deliveryLine;
        $this->delivery = $delivery;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getRoute(): Route
    {
        return $this->route;
    }

    public function getDeliveryLine(): DeliveryLine
    {
        return $this->deliveryLine;
    }

    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }
}
