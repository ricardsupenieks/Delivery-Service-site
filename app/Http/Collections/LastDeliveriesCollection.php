<?php

namespace App\Http\Collections;

use App\Models\LastDelivery;

class LastDeliveriesCollection
{
    private array $lastDeliveries = [];

    public function __construct(array $lastDeliveries = [])
    {
        foreach ($lastDeliveries as $delivery) {
            $this->add($delivery);
        }
    }

    public function add(LastDelivery $lastDelivery): void
    {
        $this->lastDeliveries [] = $lastDelivery;
    }

    public function get(): array
    {
        return $this->lastDeliveries;
    }
}
