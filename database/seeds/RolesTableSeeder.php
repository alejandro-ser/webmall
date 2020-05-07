<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            1 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'display_name' => 'Normal User',
                'id' => 2,
                'name' => 'user',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            2 => 
            array (
                'created_at' => '2020-05-04 16:39:39',
                'display_name' => 'seller',
                'id' => 3,
                'name' => 'seller',
                'updated_at' => '2020-05-04 16:39:39',
            ),
        ));
        
        
    }
}