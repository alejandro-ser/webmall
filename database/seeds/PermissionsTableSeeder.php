<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2020-05-03 17:44:20',
            ),
            1 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2020-05-03 17:44:20',
            ),
            2 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2020-05-03 17:44:20',
            ),
            3 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2020-05-03 17:44:20',
            ),
            4 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2020-05-03 17:44:20',
            ),
            5 => 
            array (
                'created_at' => '2020-05-03 17:44:20',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            6 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            7 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            8 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            9 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            10 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            11 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            12 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            13 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            14 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            15 => 
            array (
                'created_at' => '2020-05-03 17:44:21',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            16 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            17 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            18 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            19 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            20 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            21 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            22 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            23 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            24 => 
            array (
                'created_at' => '2020-05-03 17:44:22',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            25 => 
            array (
                'created_at' => '2020-05-03 17:44:39',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            26 => 
            array (
                'created_at' => '2020-05-03 17:44:39',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            27 => 
            array (
                'created_at' => '2020-05-03 17:44:39',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            28 => 
            array (
                'created_at' => '2020-05-03 17:44:39',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            29 => 
            array (
                'created_at' => '2020-05-03 17:44:40',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-05-03 17:44:40',
            ),
            30 => 
            array (
                'created_at' => '2020-05-03 17:44:42',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-05-03 17:44:42',
            ),
            31 => 
            array (
                'created_at' => '2020-05-03 17:44:43',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            32 => 
            array (
                'created_at' => '2020-05-03 17:44:43',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            33 => 
            array (
                'created_at' => '2020-05-03 17:44:43',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            34 => 
            array (
                'created_at' => '2020-05-03 17:44:43',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            35 => 
            array (
                'created_at' => '2020-05-03 17:44:48',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-05-03 17:44:48',
            ),
            36 => 
            array (
                'created_at' => '2020-05-03 17:44:49',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            37 => 
            array (
                'created_at' => '2020-05-03 17:44:49',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            38 => 
            array (
                'created_at' => '2020-05-03 17:44:49',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            39 => 
            array (
                'created_at' => '2020-05-03 17:44:49',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            40 => 
            array (
                'created_at' => '2020-05-03 17:44:56',
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2020-05-03 17:44:56',
            ),
            41 => 
            array (
                'created_at' => '2020-05-03 18:13:51',
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            42 => 
            array (
                'created_at' => '2020-05-03 18:13:51',
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            43 => 
            array (
                'created_at' => '2020-05-03 18:13:51',
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            44 => 
            array (
                'created_at' => '2020-05-03 18:13:51',
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            45 => 
            array (
                'created_at' => '2020-05-03 18:13:51',
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            46 => 
            array (
                'created_at' => '2020-05-04 12:29:32',
                'id' => 47,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            47 => 
            array (
                'created_at' => '2020-05-04 12:29:32',
                'id' => 48,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            48 => 
            array (
                'created_at' => '2020-05-04 12:29:32',
                'id' => 49,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            49 => 
            array (
                'created_at' => '2020-05-04 12:29:32',
                'id' => 50,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            50 => 
            array (
                'created_at' => '2020-05-04 12:29:32',
                'id' => 51,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-05-04 12:29:32',
            ),
        ));
        
        
    }
}