<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equiporder extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'equ_id',
        'order_id',
    ];

    public function order() {
        return $this->belongsTo('App\order');
    }
    public function equipment() {
        return $this->belongsTo('App\equipment');
    }
}
