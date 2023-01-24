<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\View\View;

class InactiveClientsController extends Controller
{
    public function showForm(): View
    {
        $inactiveClients = Delivery::with('address.client')
            ->where(['type' => 1, 'status' => 1])
            ->orWhere(['type' => 1, 'status' => 3])->get();

        return view('inactive', ['inactiveClients' => $inactiveClients]);
    }
}
