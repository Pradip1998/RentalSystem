<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    
    protected $fillable = [
        'product_name', 'product_title', 'product_price','product_description','product_image'
    ];
}
