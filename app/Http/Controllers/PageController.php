<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CustomQuery;

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
}
