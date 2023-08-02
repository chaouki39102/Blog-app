<?php

namespace App\Models\Trait;

trait HasWhereLike
{
    public function scopeWhereLike($query, String $column, string $text)
    {
        $query->where($column, 'like', '%' . $text . '%');
    }
    public function scopeOrWhereLike($query, String $column, string $text)
    {
        $query->orWhere($column, 'like', '%' . $text . '%');
    }
}
