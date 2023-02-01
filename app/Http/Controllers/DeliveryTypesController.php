<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Delivery;
use Illuminate\View\View;

class DeliveryTypesController extends Controller
{
    public function showForm(): View
    {
        $addresses = Address::with('client')->whereHas('deliveries', function ($query) {
            $query->where('type', [Delivery::LIQUID_TYPE, Delivery::SOLID_TYPE]);
        })->get();

        return view('types', ['addresses' => $addresses]);
    }
}
