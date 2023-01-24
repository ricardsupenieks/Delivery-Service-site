<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Route extends Model
{
    use HasFactory;
    use HasRelationships;

    protected $fillable = [
        'date',
        'car_number',
        'status',
        'driver_name',
    ];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }

    public function addresses()
    {
        return $this->hasManyThrough(Address::class, Delivery::class);
    }
}
