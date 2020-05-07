<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'category_id' => 4,
                'created_at' => NULL,
                'id' => 1,
                'product_id' => 1,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'category_id' => 5,
                'created_at' => NULL,
                'id' => 2,
                'product_id' => 10,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'category_id' => 6,
                'created_at' => NULL,
                'id' => 3,
                'product_id' => 10,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'category_id' => 3,
                'created_at' => NULL,
                'id' => 4,
                'product_id' => 9,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'category_id' => 7,
                'created_at' => NULL,
                'id' => 5,
                'product_id' => 8,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}