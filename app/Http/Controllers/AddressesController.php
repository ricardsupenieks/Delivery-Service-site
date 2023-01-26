<?php

namespace App\Http\Controllers;

use App\Models\Address;

class AddressesController extends Controller
{
    public function getAddresses($clientId)
    {
        $addresses = Address::whereClientId($clientId)->get();

        return response()->json(["addresses" => $addresses]);
    }
}
