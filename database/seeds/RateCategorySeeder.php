<?php

use Illuminate\Database\Seeder;
use App\PluginModel\RateCategory;

class RateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rate_categories')->delete();
        $data = array(
		    array(
		        'name'=>'Outfit',
		        'slug' => 'outfit',
		        'created_at'=>date('Y-m-d H:i:s'),
		        'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		        'name'=>'Recipe',
		        'slug' => 'recipe',
		        'created_at'=>date('Y-m-d H:i:s'),
		        'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Shoes',
		         'slug' => 'shoes',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Cooking',
		         'slug' => 'cooking',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Diet',
		         'slug' => 'diet',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Room',
		         'slug' => 'room',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Garden',
		         'slug' => 'garden',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Jewelry',
		         'slug' => 'jewelry',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		    array(
		         'name'=>'Holiday',
		         'slug' => 'holiday',
		         'created_at'=>date('Y-m-d H:i:s'),
		         'updated_at'=> date('Y-m-d H:i:s')
		    ),
		);

		RateCategory::insert($data);
    }
}
