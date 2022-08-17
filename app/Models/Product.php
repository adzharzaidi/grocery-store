<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'category_id',
        'stock',
        'seller_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function order_details(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function seller(){
        return $this->belongsTo('App\Models\Seller');
    }
}
