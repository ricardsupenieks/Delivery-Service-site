<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'client_id',
    ];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }

    public function deliveryLines()
    {
        return $this->hasManyThrough(DeliveryLine::class, Delivery::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
