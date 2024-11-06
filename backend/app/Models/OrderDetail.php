<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
       'order_id',
       'product_variant_id',
    //    'product_variant_id',
       'quantity',
       'listed_price',
       'sale_price',
       'import_price',
       'name',
       'image',

    ];

    public function ProductVariant(){
        return $this->belongsTo(ProductVariant::class,'product_variant_id');
    }
}
