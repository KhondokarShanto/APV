<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function supplier()
    {
    	return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }
    protected $attributes = [
        'image' => ''
        'status'  => ''
    ];

}
