<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlertsModel extends Model
{
    protected $table = 'alerts';
    
    protected $fillable = [
        'user_id',
        'alert_type',
        'alert_message',
        'alert_status',
    ];
}
