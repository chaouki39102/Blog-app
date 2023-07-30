<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =[
        'value',
        'comment',
        'review_type',
        'review_id',
        'is_published',
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
