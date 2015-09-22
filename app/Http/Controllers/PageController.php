<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use DB;

use App\CustomQuery;

use App\Model\Category;

class PageController extends Controller
{
	private $customQuery;

	function __construct(CustomQuery $customQuery) 
	{
		$this->customQuery = $customQuery;
		$customQuery->per_page = 15;
	}

	public function index()
    {    	
    	return view('pages.layout');
    }

    public function home()
    {
    	$posts = $this->customQuery->getPosts();
    	return view('pages.home',compact('posts'));
    }

    public function single($category,$slug)
    {
    	$post = $this->customQuery->getPost($slug,$category);

		if($post == null)
        {
            App::abort(404);
        }

    	return view('pages.single',compact('post'));
    }

    public function category($category)
    {
        $check_slug = Category::where('slug','=',$category)->first();

        if($check_slug == null)
        {
            App::abort(404);
        }

        $posts = $this->customQuery->getPosts(0,$check_slug->id);
        $current_category_id = $check_slug->id;
        
        return view('pages.home',compact(['posts','current_category_id']));
    }
}
