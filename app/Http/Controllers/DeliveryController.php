<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;

class DeliveryController extends Controller
{
    public function showForm($clientId): View
    {
        $client = Client::find($clientId);
        $deliveries = Client::with('addresses.deliveries.deliveryLine')->with('deliveries.route')->whereId($clientId)->get();

        return view('deliveries', [
            'client' => $client,
            'clientDeliveries' => $deliveries,
        ]);
    }
}
