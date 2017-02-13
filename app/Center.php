<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
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
}
