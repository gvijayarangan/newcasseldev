<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable=[
        'noti_type',
        'noti_alert_content',
        'noti_status',
        'noti_email_title',
    ];
}
