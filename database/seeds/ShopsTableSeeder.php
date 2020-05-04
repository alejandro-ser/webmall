<?php

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
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'created_at' => '2020-05-04 16:43:00',
                'description' => 'Shop for testing',
                'id' => 3,
                'is_active' => 1,
                'name' => 'Test shop',
                'rating' => NULL,
                'updated_at' => '2020-05-04 18:45:13',
                'user_id' => 1,
            ),
        ));
        
        
    }
}