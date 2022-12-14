<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'email',
        'password',
        'full_name',
        'billing_address',
        'phone',
    ];

    public function order(){
        return $this->hasMany('App\Models\Order');
    }
}
