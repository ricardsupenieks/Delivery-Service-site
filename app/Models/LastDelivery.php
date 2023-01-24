<?php

namespace App\Models;

class LastDelivery
{
    private Client $client;
    private Address $address;
    private DeliveryLine $deliveryLine;

    public function __construct(Client $client, Address $address, DeliveryLine $deliveryLine)
    {
        $this->client = $client;
        $this->address = $address;
        $this->deliveryLine = $deliveryLine;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getDeliveryLine(): DeliveryLine
    {
        return $this->deliveryLine;
    }
}
