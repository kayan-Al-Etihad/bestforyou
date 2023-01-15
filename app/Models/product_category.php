<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $fillable = [
        'category_id',
        'product_id'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
    }
}
