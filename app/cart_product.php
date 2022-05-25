<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_product extends Model
{
    
    protected $fillable = [
        'user_id', 'product_id','time'    
    ];


}
