<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rescontact extends Model
{
    protected $fillable=[
        'con_fname',
        'con_mname',
        'con_lname',
        'con_relationship',
        'con_cellphone',
        'con_email',
        'con_comment',
        'con_gender',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\user');
    }

}

