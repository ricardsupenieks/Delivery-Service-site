<?php

namespace App\Http\Collections;

use App\Models\InactiveClient;

class InactiveClientsCollection
{
    private array $inactiveClients = [];

    public function __construct(array $inactiveClients = [])
    {
        foreach ($inactiveClients as $inactiveClient) {
            $this->add($inactiveClient);
        }
    }

    public function add(InactiveClient $inactiveClient): void
    {
        $this->inactiveClients []= $inactiveClient;
    }

    public function get(): array
    {
        return $this->inactiveClients;
    }
}
