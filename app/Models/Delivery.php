<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;

class Delivery extends Model
{
    use HasFactory;
    use BelongsToThrough;

    const LIQUID_TYPE = 1;
    const SOLID_TYPE = 2;

    protected $fillable = [
        'route_id',
        'address_id',
        'type',
        'status',
    ];

    public function deliveryLine()
    {
       return $this->hasOne(DeliveryLine::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function client()
    {
        return $this->belongsToThrough(Client::class, Address::class);
    }
}
