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

    public function rate($category = 0,$sub_category = 0)
    {
        $user_id = 0;
        $with_category = '';

        //Category blah blah
        $this->data['latest_upload'] = 'uploads';

        $this->data['query_category'] = $category;
        $this->data['query_sub_category'] = $sub_category;

        if(Auth::check())
        {
            $user_id = Auth::user()->id;
        }

        if($category != 0 && $sub_category == 0)
        {
            $with_category = " AND c.category_id =".$category;
            $this->data['latest_upload'] = PollCategories::find($category)->name;
        }

        if($sub_category != 0)
        {
            $with_category = " AND c.id =".$sub_category;
            $this->data['latest_upload'] = SubCategories::find($sub_category)->name;
        }

        $this->data['side_poll_items'] = 
            DB::select("
                    SELECT a.id,a.image_url,a.sub_category_id,a.name,b.id as category_id, c.name as sub_name
                    FROM poll_items a, poll_categories b, poll_sub_categories c
                    WHERE a.sub_category_id = c.id
                    AND c.category_id = b.id
                    ORDER BY a.id DESC
                    LIMIT 5"
                );


        $this->data['categories_with_sub'] = DB::select('
            SELECT a.id,b.id as id2,a.name,b.name as name2 FROM poll_categories a LEFT JOIN (poll_sub_categories b) ON (a.id = b.category_id)
            ');

        $this->data['poll_items'] = 
            DB::select("
                SELECT 
                a.image_url,a.name,a.id,a.sub_category_id,
                b.id as follow_items_id,
                c.category_id,
                d.name as user_name,d.profile_image,d.id as user_id,
                e.result_yay,
                (SELECT ( SUM(result_yay) / ( SUM(result_yay) + SUM(result_nay) ) * 100 )
                    FROM poll_results f 
                    WHERE f.poll_item_id = a.id) as yes_percentage,
                (SELECT COUNT(1) 
                    FROM comments g 
                    WHERE g.category = 2
                    AND g.post_id = a.id) as comment_count

                FROM poll_items a
                LEFT JOIN follow_items b
                ON b.poll_item_id = a.id 
                AND b.user_id = ".$user_id."
                JOIN poll_sub_categories c 
                ON a.sub_category_id = c.id
                ".$with_category."
                JOIN users d 
                ON a.user_id = d.id
                LEFT JOIN poll_results e 
                ON a.id = e.poll_item_id
                AND e.user_id = ".$user_id."

                ORDER BY a.id DESC
                LIMIT 0,3
        ");

        foreach ($this->data['poll_items'] as $poll_item) {

            $poll_item->comments = 
                DB::select("
                SELECT * FROM 
                ( SELECT b.id,b.name,b.profile_image,a.comment,a.created_at,a.id as water
             FROM comments a
             JOIN users b
             ON a.user_id = b.id
             WHERE a.post_id = ".$poll_item->id."
             AND a.category = 2
             ORDER BY a.id DESC
             LIMIT 5
                 ) tmp ORDER BY tmp.water ASC
                ");
        }

        return view('pages.rate');  
    }
}
