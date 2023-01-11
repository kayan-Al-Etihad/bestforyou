<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Feedback extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'email',
        'feedback',
        'status',
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
