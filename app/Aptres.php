<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Apartment;
use App\Resident;

class Aptres extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'apt_id',
        'res_id',
        'start_date',
        'end_date' ,
        'status',
    ];

    public function aptres() {
        return $this->hasMany('App\aptres');
    }

    public function conres() {
        return $this->hasMany('App\conres');
    }

    public function center() {
        return $this->belongsTo('App\center');
    }
}
