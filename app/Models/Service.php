<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_service_pivot','service_id','order_id');
    }
}
