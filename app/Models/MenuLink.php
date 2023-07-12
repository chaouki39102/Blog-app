<?php

namespace App\Models;

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
}
