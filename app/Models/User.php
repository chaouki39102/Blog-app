<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'job_title',
        'bio',
        'status',
        'user_type',
        'avatar',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'created_by_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'notifiable_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'comment');
    }
    public function reviews()
    {
        return $this->morphMany(Review::class, 'review');
    }
    public function views()
    {
        return $this->morphMany(View::class, 'view');
    }
    public function getNameAttribute($val)
    {
        return ucfirst($val);
    }

    function setAvatarAttribute()
    {
        //
    }
    function getAvatarAttribute($val)
    {
        return $val ?: url('assets\images\users\user01.png');
    }
}
