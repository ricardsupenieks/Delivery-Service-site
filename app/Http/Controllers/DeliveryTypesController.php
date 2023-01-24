<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryTypesController extends Controller
{
    public function showForm()
    {
//        $deliveries = Delivery::with('address.client')->

//        $deliveries = Delivery::whereType(1)->orWhere('type', 2)->get();
//        $results = [];
//
//        foreach ($deliveries as $delivery) {
//            $addresses = Address::whereId($delivery->address_id)->get();
//
//            foreach ($addresses as $address) {
//                $client = Client::whereId($address->client_id)->first();
//
//                $results[] = [$client->name, $address->title];
//            }
//        }

        return view('types');
    }
}
