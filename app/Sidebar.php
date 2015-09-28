<?php 

namespace App;

use App\Model\Post;
use App\PluginModel\RateCategory;

class SideBar {

	public function getPost()
	{
		return Post::all();
	}

	public function getRateCategories()
	{
		$rate_categories = RateCategory::where('parent_id',0)->get();

		$category_select = ['0' => 'Select Category'];
		foreach ($rate_categories as $category2) {
    		$category_select[$category2->id] = $category2->name;
    	}

    	return $category_select;
	}
}