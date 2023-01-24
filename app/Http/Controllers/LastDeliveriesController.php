<?php

namespace App\Http\Controllers;

use App\Models\Client;
class LastDeliveriesController extends Controller
{
    public function showForm()
    {
        $lastDeliveries = Client::with('addresses.deliveries.deliveryLine')->get();

        return view('lastDelivery', ['lastDeliveries' => $lastDeliveries]);
    }
}
