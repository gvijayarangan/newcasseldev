<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'sup_name',
        'sup_unitprice',
        'sup_comment',
    ];

    public function supplyorder() {
        return $this->hasMany('App\supplyorder');
    }
}
