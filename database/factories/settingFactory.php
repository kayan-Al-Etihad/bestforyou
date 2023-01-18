<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Setting::class, function (Faker $faker) {
    return [
        'site_title'  => 'laravel',
        'site_description' => 'laravel E-commerce',
        'site_logo' => 'logo-best.png',
        'site_icon' => 'logo-best.png',
        'site_address' => 'turkey , Antalya'
        , 'site_phone' => '+90 553 846 2567'
        , 'site_email' => 'hosseinhaghparast0@gmail.com'
        , 'site_fax' => '+90 553 846 2567',
    ];
});
