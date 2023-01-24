<?php

namespace App\Models;

class InactiveClient
{
    private Address $address;
    private Client $client;

    public function __construct(Address $address, Client $client)
    {
        $this->address = $address;
        $this->client = $client;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}
