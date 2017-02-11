<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'apt_floornumber',
        'apt_number',
        'apt_comments'

    ];
}