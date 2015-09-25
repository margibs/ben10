<?php 

namespace App;

use App\Model\Post;

class SideBar {

	public function getPost()
	{
		return Post::all();
	}

	public function watermelon($water)
	{
		return $water;
	}
}