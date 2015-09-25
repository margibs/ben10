<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert([
        //     'name' => 'Uncategorized',
        //     'slug' => 'uncategorized'
        // ]);

        DB::table('categories')->delete();
        $data = array(
            array(
                'name'=>'Uncategorized',
                'slug' => 'uncategorized',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Celebs',
                'slug' => 'celebs',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ),
            array(
                 'name'=>'Cute',
                 'slug' => 'cute',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=> date('Y-m-d H:i:s')
            ),
            array(
                 'name'=>'Slots',
                 'slug' => 'slots',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=> date('Y-m-d H:i:s')
            ),
            array(
                 'name'=>'Bingo',
                 'slug' => 'bingo',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=> date('Y-m-d H:i:s')
            ),
            array(
                 'name'=>'Scratch Cards',
                 'slug' => 'scratch-cards',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=> date('Y-m-d H:i:s')
            )
        );
        
        Category::insert($data);
    }
}
