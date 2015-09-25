<?php 

namespace App;

use App\Model\Post;

class SideBar {

	public function getPost()
	{
		return Post::all();
	}
}