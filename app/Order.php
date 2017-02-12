<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id', 'order', 'order_description', 'active', 'created_by', 'updated_by', 'comment', 'cell', 'rec_email'
    ];

    
}