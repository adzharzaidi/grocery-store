<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'full_name',
        'phone',
    ];

    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
