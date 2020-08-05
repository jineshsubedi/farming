<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name', 'address', 'email', 'phone', 'image'
    ];

    public static function getName($id)
    {
    	$data = Vendor::find($id);
    	if($data){
    		return $data->name;
    	}
    	return '';
    }
}
