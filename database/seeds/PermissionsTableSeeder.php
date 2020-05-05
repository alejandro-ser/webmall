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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-05-03 17:44:20',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-05-03 17:44:20',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-05-03 17:44:20',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-05-03 17:44:20',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-05-03 17:44:20',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-03 17:44:20',
                'updated_at' => '2020-05-03 17:44:20',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-05-03 17:44:21',
                'updated_at' => '2020-05-03 17:44:21',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-03 17:44:22',
                'updated_at' => '2020-05-03 17:44:22',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-03 17:44:39',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-03 17:44:39',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-03 17:44:39',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-03 17:44:39',
                'updated_at' => '2020-05-03 17:44:39',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-03 17:44:40',
                'updated_at' => '2020-05-03 17:44:40',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-03 17:44:42',
                'updated_at' => '2020-05-03 17:44:42',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-03 17:44:43',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-03 17:44:43',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-03 17:44:43',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-03 17:44:43',
                'updated_at' => '2020-05-03 17:44:43',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-03 17:44:48',
                'updated_at' => '2020-05-03 17:44:48',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-03 17:44:49',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-03 17:44:49',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-03 17:44:49',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-03 17:44:49',
                'updated_at' => '2020-05-03 17:44:49',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-05-03 17:44:56',
                'updated_at' => '2020-05-03 17:44:56',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-05-03 18:13:51',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-05-03 18:13:51',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-05-03 18:13:51',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-05-03 18:13:51',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-05-03 18:13:51',
                'updated_at' => '2020-05-03 18:13:51',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2020-05-04 12:29:32',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2020-05-04 12:29:32',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2020-05-04 12:29:32',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2020-05-04 12:29:32',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2020-05-04 12:29:32',
                'updated_at' => '2020-05-04 12:29:32',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-05-05 19:48:25',
                'updated_at' => '2020-05-05 19:48:25',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-05-05 19:48:25',
                'updated_at' => '2020-05-05 19:48:25',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-05-05 19:48:25',
                'updated_at' => '2020-05-05 19:48:25',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-05-05 19:48:25',
                'updated_at' => '2020-05-05 19:48:25',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-05-05 19:48:25',
                'updated_at' => '2020-05-05 19:48:25',
            ),
        ));
        
        
    }
}