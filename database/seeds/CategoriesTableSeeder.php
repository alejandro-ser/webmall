<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2020-05-06 10:12:14',
                'id' => 3,
                'name' => 'Electronic devices',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'electronic-devices',
                'updated_at' => '2020-05-07 13:58:59',
            ),
            1 => 
            array (
                'created_at' => '2020-05-06 10:13:34',
                'id' => 4,
                'name' => 'Home',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'home',
                'updated_at' => '2020-05-07 13:59:52',
            ),
            2 => 
            array (
                'created_at' => '2020-05-06 10:13:50',
                'id' => 5,
                'name' => 'Groceries',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'groceries',
                'updated_at' => '2020-05-07 14:01:48',
            ),
            3 => 
            array (
                'created_at' => '2020-05-06 10:15:06',
                'id' => 6,
                'name' => 'Men',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'men',
                'updated_at' => '2020-05-07 14:02:17',
            ),
            4 => 
            array (
                'created_at' => '2020-05-06 10:15:53',
                'id' => 7,
                'name' => 'Women',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'women',
                'updated_at' => '2020-05-07 14:02:50',
            ),
            5 => 
            array (
                'created_at' => '2020-05-07 14:04:53',
                'id' => 8,
                'name' => 'Top',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'top',
                'updated_at' => '2020-05-07 14:04:53',
            ),
            6 => 
            array (
                'created_at' => '2020-05-07 14:05:51',
                'id' => 9,
                'name' => 'Mobiles',
                'order' => 1,
                'parent_id' => 3,
                'slug' => 'mobiles',
                'updated_at' => '2020-05-07 14:05:51',
            ),
            7 => 
            array (
                'created_at' => '2020-05-07 14:06:34',
                'id' => 10,
                'name' => 'Laptops',
                'order' => 1,
                'parent_id' => 3,
                'slug' => 'laptops',
                'updated_at' => '2020-05-07 14:06:34',
            ),
            8 => 
            array (
                'created_at' => '2020-05-07 14:06:54',
                'id' => 11,
                'name' => 'Cameras',
                'order' => 1,
                'parent_id' => 3,
                'slug' => 'cameras',
                'updated_at' => '2020-05-07 14:06:54',
            ),
            9 => 
            array (
                'created_at' => '2020-05-07 14:10:11',
                'id' => 12,
                'name' => 'Smartphones',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'smartphones',
                'updated_at' => '2020-05-07 14:10:11',
            ),
            10 => 
            array (
                'created_at' => '2020-05-07 14:10:33',
                'id' => 13,
                'name' => 'Tablets',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'tablets',
                'updated_at' => '2020-05-07 14:10:33',
            ),
            11 => 
            array (
                'created_at' => '2020-05-07 14:11:04',
                'id' => 14,
                'name' => 'Gamming',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'gamming',
                'updated_at' => '2020-05-07 14:11:04',
            ),
            12 => 
            array (
                'created_at' => '2020-05-07 14:29:11',
                'id' => 15,
                'name' => 'Televisions',
                'order' => 1,
                'parent_id' => 4,
                'slug' => 'televisions',
                'updated_at' => '2020-05-07 14:29:11',
            ),
            13 => 
            array (
                'created_at' => '2020-05-07 14:29:35',
                'id' => 16,
                'name' => 'TV',
                'order' => 1,
                'parent_id' => 15,
                'slug' => 'tv',
                'updated_at' => '2020-05-07 14:29:35',
            ),
            14 => 
            array (
                'created_at' => '2020-05-07 14:29:50',
                'id' => 17,
                'name' => 'Smart',
                'order' => 1,
                'parent_id' => 15,
                'slug' => 'smart',
                'updated_at' => '2020-05-07 14:29:50',
            ),
            15 => 
            array (
                'created_at' => '2020-05-07 14:30:41',
                'id' => 18,
                'name' => 'Beverages',
                'order' => 1,
                'parent_id' => 5,
                'slug' => 'beverages',
                'updated_at' => '2020-05-07 14:30:41',
            ),
            16 => 
            array (
                'created_at' => '2020-05-07 14:34:47',
                'id' => 19,
                'name' => 'Coffee',
                'order' => 1,
                'parent_id' => 18,
                'slug' => 'coffee',
                'updated_at' => '2020-05-07 14:34:47',
            ),
            17 => 
            array (
                'created_at' => '2020-05-07 14:35:14',
                'id' => 20,
                'name' => 'Tea',
                'order' => 1,
                'parent_id' => 18,
                'slug' => 'tea',
                'updated_at' => '2020-05-07 14:35:14',
            ),
            18 => 
            array (
                'created_at' => '2020-05-07 14:35:29',
                'id' => 21,
                'name' => 'Juices',
                'order' => 1,
                'parent_id' => 18,
                'slug' => 'juices',
                'updated_at' => '2020-05-07 14:35:29',
            ),
            19 => 
            array (
                'created_at' => '2020-05-07 14:59:15',
                'id' => 22,
                'name' => 'Clothing',
                'order' => 1,
                'parent_id' => 6,
                'slug' => 'clothing-men',
                'updated_at' => '2020-05-07 14:59:15',
            ),
            20 => 
            array (
                'created_at' => '2020-05-07 14:59:55',
                'id' => 23,
                'name' => 'Clothing',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'clothing-women',
                'updated_at' => '2020-05-07 14:59:55',
            ),
            21 => 
            array (
                'created_at' => '2020-05-07 15:02:27',
                'id' => 24,
                'name' => 'Jackets',
                'order' => 1,
                'parent_id' => 22,
                'slug' => 'jackets',
                'updated_at' => '2020-05-07 15:02:27',
            ),
            22 => 
            array (
                'created_at' => '2020-05-07 15:03:28',
                'id' => 25,
                'name' => 'Shirts',
                'order' => 1,
                'parent_id' => 22,
                'slug' => 'shirts',
                'updated_at' => '2020-05-07 15:03:28',
            ),
            23 => 
            array (
                'created_at' => '2020-05-07 15:03:57',
                'id' => 26,
                'name' => 'Jeans',
                'order' => 1,
                'parent_id' => 22,
                'slug' => 'jeans',
                'updated_at' => '2020-05-07 15:03:57',
            ),
            24 => 
            array (
                'created_at' => '2020-05-07 15:04:51',
                'id' => 27,
                'name' => 'Tops',
                'order' => 1,
                'parent_id' => 23,
                'slug' => 'tops',
                'updated_at' => '2020-05-07 15:04:51',
            ),
            25 => 
            array (
                'created_at' => '2020-05-07 15:05:12',
                'id' => 28,
                'name' => 'Shorts',
                'order' => 1,
                'parent_id' => 23,
                'slug' => 'shorts',
                'updated_at' => '2020-05-07 15:05:12',
            ),
            26 => 
            array (
                'created_at' => '2020-05-07 15:05:32',
                'id' => 29,
                'name' => 'Skirts',
                'order' => 1,
                'parent_id' => 23,
                'slug' => 'skirts',
                'updated_at' => '2020-05-07 15:05:32',
            ),
        ));
        
        
    }
}