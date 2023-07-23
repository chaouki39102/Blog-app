<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'value',
    ];
    private $jesonSettings = [
        'features_section_cards'
    ];

    function getValueAttribute($val)
    {
        if (in_array($this->key, $this->jesonSettings)) {
            $val = json_decode($val);
            return !json_last_error() ? $val : [];
        }
        return $val;
    }
}
