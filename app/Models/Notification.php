<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =[            
        'notification_type',            
        'is_read',            
        'uri',            
        'text',            
        'icon',            
        'notifiable_id',            
        'user_id',            
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
