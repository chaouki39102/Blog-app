<?php

namespace App\Models;

use App\Models\Trait\HasWhereLike;
use App\Models\Trait\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasWhereLike,Viewable;


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
        $query->when($search = request()->query('q'), function ($q) use ($search) {
            $q->WhereLike('title', $search)
                ->orWhereLike('description', $search)
                ->orWhereLike('seo_keywords', $search)
                ->orWhereLike('seo_description', $search);
        })->when($search = request()->query('category_id'), function ($q) use ($search) {
            $q->Where('category_id', $search);
        });
    }
    public function scopeReleted($query, Post $post, int $limit = 3)
    {
        $query->limit($limit)
            ->inRandomOrder()
            ->whereCategoryId($post->category_id)
            ->whereNot('id', $post->id);
    }
}
