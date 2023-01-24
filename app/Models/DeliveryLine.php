<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;

class DeliveryLine extends Model
{
    use HasFactory;
    use BelongsToThrough;

    protected $fillable = [
        'delivery_id',
        'item',
        'price',
        'qty',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function address()
    {
        return $this->belongsToThrough(Address::class, Delivery::class);
    }
}
