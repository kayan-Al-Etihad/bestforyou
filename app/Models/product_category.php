<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $fillable = [
        'category_id',
        'product_id'
    ];


    public function pro()
    {
        return $this->hasMany(Product::class);
    }
}
