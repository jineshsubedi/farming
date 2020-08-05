<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorOrder extends Model
{
    protected $fillable = [
        'vendor_id', 'title', 'quantity', 'unit_cost', 'total_cost', 'date'
    ];

    public static function getTotalExpense($id)
    {
    	return VendorOrder::where('vendor_id', $id)->sum('total_cost');
    }
}
