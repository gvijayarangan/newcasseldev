<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'equ_type',
        'equ_name',
        'equ_comment',
    ];

    public function equiporder() {
        return $this->hasMany('App\equiporder');
    }
}
