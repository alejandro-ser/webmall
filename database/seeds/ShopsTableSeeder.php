<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        factory(Shop::class)->create(['user_id' => 3]);
        factory(Shop::class)->create(['user_id' => 4]);
    }
}