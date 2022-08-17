<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
    ];

    public function order(){
        return $this->hasMany('App\Models\Order');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
