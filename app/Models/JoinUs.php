<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    protected $fillable = ['name', 'email', 'phone' , 'city', 'cv'];
}
