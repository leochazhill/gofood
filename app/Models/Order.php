<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'restaurant_id',
        'order_items',
        'order_total',
        'delivery_status',
        'firstname',
        'lastname',
        'email',
        'phone',
        'country',
        'street',
        'town',
        'postcode'
    ];
}
