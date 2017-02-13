<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignorder extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'user_id',
        'order_id',
    ];

    public function order() {
        return $this->belongsTo('App\order');
    }

    public function user() {
        return $this->belongsTo('App\user');
    }
}
