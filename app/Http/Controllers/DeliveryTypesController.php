<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Delivery;
use Illuminate\View\View;

class DeliveryTypesController extends Controller
{
    public function showForm(): View
    {
        $addresses = Address::all();

        $results = [];

        foreach($addresses as $address) {

            $liquidDeliveries = Delivery::with('client')
                ->where('address_id', $address->id)
                ->where('type', 1)
                ->get();

            $hardDeliveries = Delivery::with('client')
                ->where('address_id', $address->id)
                ->where('type', 2)
                ->get();

            if(!$liquidDeliveries->isEmpty() && !$hardDeliveries->isEmpty()) {

                $results[]=["address" => $address->title, "client" => $address->client->name];
            }
        }

        return view('types', ['types' => $results]);
    }
}
