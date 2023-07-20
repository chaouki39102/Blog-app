<?php

namespace App\Models;

use App\Models\Scopes\IsActiveScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuLink extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'url',
        'parent_id',
        'is_active',
        'section_link_id',
        'position',
        'icon',
    ];
    protected static function booted() :void
    {
        static::addGlobalScope(new IsActiveScope);
    }
    public function sectionLink()
    {
        return $this->belongsTo(sectionLink::class);
    }
    public function subMenuLinks()
    {
        return $this->hasMany(MenuLink::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(MenuLink::class);
    }
    public function scopeActive($query)
    {
        $query->where('is_active', true);
    }
    public function scopeMenuType(Builder $query, string $type)
    {
        $query-> where('menu_type', $type);
    }

}
