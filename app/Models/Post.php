<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'seo_keywords',
        'seo_description',
        'description',
        'image_thumbnail',
        'image_cover',
        'is_published',
        'created_by_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class);
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


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSearch($query)
    {
        $query-> where('menu_type');
    }
}
