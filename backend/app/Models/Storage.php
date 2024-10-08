<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $table = "storages";

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];
}

