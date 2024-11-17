<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'cost'];
<<<<<<< HEAD
} 
=======

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
>>>>>>> 1fe3e0b4cf34977290b283e185f6c89e5d53937e
