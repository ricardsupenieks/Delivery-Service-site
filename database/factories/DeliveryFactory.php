<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'route_id' => Route::factory(),
            'address_id' => Address::factory(),
            'type' => mt_rand(1,2),
            'status' => mt_rand(1,3),
        ];
    }
}
