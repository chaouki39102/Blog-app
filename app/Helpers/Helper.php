<?php

use App\Models\Setting;
use Illuminate\Support\Str;

if (!function_exists('setting')) {
    function setting(String $key, $default = null)
    {
        return  data_get(app()->bound('settings') ? app('settings') : [], $key, $default);
    }
}


if (!function_exists('getFile')) {
    function getFile(String $path, $default = null)
    {
        if (Str::contains($path, 'assets')) {
            return url($path);
        };
        return  route('get-file', ['path' => $path]);
    }
}
