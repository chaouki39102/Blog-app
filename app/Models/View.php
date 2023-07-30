<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    protected $fillable =[
        'view_type',
        'view_id',
        'ip_address',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
