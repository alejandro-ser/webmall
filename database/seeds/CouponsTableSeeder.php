<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'code' => 'SPRING',
                'created_at' => '2020-05-06 19:24:00',
                'description' => 'Spring discount',
                'id' => 1,
                'name' => 'Spring sale',
                'type' => 'discount',
                'updated_at' => '2020-05-06 19:25:37',
                'value' => '-20%',
            ),
            1 => 
            array (
                'code' => 'SUMMER',
                'created_at' => '2020-05-06 19:25:24',
                'description' => 'Summer offer',
                'id' => 2,
                'name' => 'Summer sale',
                'type' => 'offer',
                'updated_at' => '2020-05-06 19:25:24',
                'value' => '-30%',
            ),
            2 => 
            array (
                'code' => 'FALL',
                'created_at' => '2020-05-06 19:26:41',
                'description' => 'Fall offer',
                'id' => 3,
                'name' => 'Fall sale',
                'type' => 'offer',
                'updated_at' => '2020-05-06 19:26:41',
                'value' => '-40%',
            ),
            3 => 
            array (
                'code' => 'WINTER',
                'created_at' => '2020-05-06 19:27:39',
                'description' => 'Winter discount',
                'id' => 4,
                'name' => 'Winter sale',
                'type' => 'discount',
                'updated_at' => '2020-05-06 19:27:39',
                'value' => '-50%',
            ),
        ));
        
        
    }
}