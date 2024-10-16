<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'discount', 'discount_type', 'minimum_spend', 'start_date', 'end_date', 'usage_limit', 'used_count', 'status'
    ];

    public function isValid()
    {
        return $this->start_date <= now() &&
               $this->end_date > now() &&
               ($this->usage_limit === null || $this->used_count < $this->usage_limit);
    }
}
