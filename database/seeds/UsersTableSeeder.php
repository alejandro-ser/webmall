<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@correo.dev',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xwknuULAWDTnSVZpVRMCcO8sPrNazD2uEiCAtUJVkqcUWZ/efmyAm',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-05-03 17:54:14',
                'updated_at' => '2020-05-04 09:39:46',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Customer',
                'email' => 'customer@correo.dev',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZA5.YtMORRAIyPuf61DC3.6RlXqCczkyeOKbbMhzDjObc8/pClIX6',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-04 18:52:24',
                'updated_at' => '2020-05-04 18:52:24',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Seller',
                'email' => 'seller@correo.dev',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eYPeJLUaXgsPFr12V8r9I.iO.eGYKGs.ZaElqSDPmse7Wina1etbi',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-05-05 14:22:21',
                'updated_at' => '2020-05-05 18:46:33',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller Two',
                'email' => 'seller2@correo.dev',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eYPeJLUaXgsPFr12V8r9I.iO.eGYKGs.ZaElqSDPmse7Wina1etbi',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-05-05 14:22:21',
                'updated_at' => '2020-05-05 18:46:33',
            ),
        ));
        
        
    }
}