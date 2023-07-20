<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting(String $key, $default = null)
    {
        return  data_get(app()->bound('settings') ? app('settings') : [], $key, $default);
    }
}
