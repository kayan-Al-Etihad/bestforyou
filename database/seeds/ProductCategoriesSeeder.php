<?php

use App\Models\product_category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        product_category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(product_category::class,10)->create();
    }
}
