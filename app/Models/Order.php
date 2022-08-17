<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'amount',
        'shipping_address',
        'order_status',
    ];

    public function orderDetail(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
}
