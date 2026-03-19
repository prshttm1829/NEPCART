<?php
use App\Models\officeSetting;
use Illuminate\support\Facades\Cache;
if (!function_exists('officeSetting')) {
    function officeSetting()
    {
        return Cache::rememberForever('officeSetting',function() {
            return officeSetting::latest()->first();
        });
    
    }
}