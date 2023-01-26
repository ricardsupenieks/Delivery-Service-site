<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Client extends Model
{
    use HasFactory;
    use HasRelationships;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'email',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function deliveries()
    {
        return $this->hasManyThrough(Delivery::class, Address::class);
    }

    public function deliveryLines()
    {
        return $this->hasManyDeep(DeliveryLine::class, [Address::class, Delivery::class]);
    }
}
