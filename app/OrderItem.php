<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id','user_id', 'product_id', 'time','subtotal','total'
    ];
}
