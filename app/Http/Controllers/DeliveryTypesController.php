<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\View\View;

class DeliveryTypesController extends Controller
{
    public function showForm(): View
    {
        $addresses = Address::with('client')->whereHas('deliveries', function ($query) {
            $query->where('type', 1);
        })->whereHas('deliveries', function ($query) {
                $query->where('type', 2);
        })->get();

        return view('types', ['types' => $addresses]);
    }
}
