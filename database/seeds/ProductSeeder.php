<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 25)->create(['shop_id' => 1]);
        factory(Product::class, 25)->create(['shop_id' => 2]);
    }
}
