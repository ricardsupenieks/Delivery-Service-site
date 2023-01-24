<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DeliveryTypesController;
use App\Http\Controllers\InactiveClientsController;
use App\Http\Controllers\LastDeliveriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClientController::class, 'showForm']);

Route::get('/clients', [ClientController::class, 'showForm']);

Route::get('/clients/inactive', [InactiveClientsController::class, 'showForm']);

Route::get('/deliveries/types', [DeliveryTypesController::class, 'showForm']);

Route::get('/deliveries/last', [LastDeliveriesController::class, 'showForm']);

Route::get('/deliveries/{clientId}', [DeliveryController::class, 'showForm']);
