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
                'avatar' => 'users/default.png',
                'created_at' => '2020-05-02 14:22:21',
                'email' => 'alejosegi@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'User',
                'password' => '$2y$10$eYPeJLUaXgsPFr12V8r9I.iO.eGYKGs.ZaElqSDPmse7Wina1etbi',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2020-05-03 17:50:29',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-05-03 17:54:14',
                'email' => 'admin@correo.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Admin',
                'password' => '$2y$10$xwknuULAWDTnSVZpVRMCcO8sPrNazD2uEiCAtUJVkqcUWZ/efmyAm',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2020-05-03 17:54:15',
            ),
        ));
        
        
    }
}