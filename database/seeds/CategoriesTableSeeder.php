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
                'name' => 'Men',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'men',
                'updated_at' => '2020-05-06 10:12:31',
            ),
            1 => 
            array (
                'created_at' => '2020-05-06 10:13:34',
                'id' => 4,
                'name' => 'Watch',
                'order' => 1,
                'parent_id' => 3,
                'slug' => 'watch',
                'updated_at' => '2020-05-06 10:13:34',
            ),
            2 => 
            array (
                'created_at' => '2020-05-06 10:13:50',
                'id' => 5,
                'name' => 'Women',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'women',
                'updated_at' => '2020-05-06 10:13:50',
            ),
            3 => 
            array (
                'created_at' => '2020-05-06 10:15:06',
                'id' => 6,
                'name' => 'Cosmetics',
                'order' => 1,
                'parent_id' => 5,
                'slug' => 'cosmetics',
                'updated_at' => '2020-05-06 10:15:06',
            ),
            4 => 
            array (
                'created_at' => '2020-05-06 10:15:53',
                'id' => 7,
                'name' => 'Lipsticks',
                'order' => 1,
                'parent_id' => 6,
                'slug' => 'lipsticks',
                'updated_at' => '2020-05-06 10:15:53',
            ),
        ));
        
        
    }
}