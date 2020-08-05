<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'app_name', 'sub_name', 'url', 'logo', 'favicon','email', 'address', 'phone_number1', 'phone_number2'
    ];

    public static function getLogo()
    {
    	$setting = \App\Models\Setting::find(1);
    	if(isset($setting->logo)){
    		return $setting->logo;
    	}
    	return '';
    }
    public static function getFavicon()
    {
    	$setting = \App\Models\Setting::find(1);
    	if(isset($setting->favicon)){
    		return $setting->favicon;
    	}
    	return '';
    }
}
