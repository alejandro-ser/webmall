<?php

use App\ProductCategories;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        factory(ProductCategories::class, 50)->create();
    }
}