<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function showForm(): View
    {
        $clients = Client::all();

        return view('clients', ['clients' => $clients]);
    }
}
