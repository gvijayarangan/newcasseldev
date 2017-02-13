<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'res_pccid',
        'res_fname',
        'res_mname',
        'res_lname',
        'res_gender',
        'res_phone',
        'res_cellphone',
        'res_email',
        'res_comment',
        'res_status',
    ];

     public function aptres() {
        return $this->hasMany('App\aptres');
     }
    public function conres() {
        return $this->hasMany('App\conres');
    }

}
