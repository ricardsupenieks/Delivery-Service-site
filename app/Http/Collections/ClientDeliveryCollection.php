<?php

namespace App\Http\Collections;

use App\Models\ClientDelivery;

class ClientDeliveryCollection
{
    private array $clientDeliveries = [];

    public function __construct(array $clientDeliveries = [])
    {
        foreach ($clientDeliveries as $clientDelivery) {
            $this->add($clientDelivery);
        }
    }

    public function add(ClientDelivery $clientDelivery): void
    {
        $this->clientDeliveries [] = $clientDelivery;
    }

    public function get(): array
    {
        return $this->clientDeliveries;
    }
}
