<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use DB;
use Validator;
use Auth;

use App\CustomQuery;

use App\Model\Category;

use App\PluginModel\RateItem;
use App\PluginModel\WidgetRating;
use App\PluginModel\RateCategory;

class PageController extends Controller
{
  private $customQuery;

  function __construct(CustomQuery $customQuery) 
  {
    $this->customQuery = $customQuery;
    $customQuery->per_page = 15;
  }

  public function sample()
  {
    return view('sample');
  }

  public function ajaxSample(Request $request)
  {
    return $request->all();
  }

  public function index()
  {    	
    return view('pages.layout');
  }


  public function home()
  {
    // $sample = DB::table('rate_categories AS a')
    // ->join('rate_categories AS b','a.parent_id','=','b.id')
    // // ->select('a.name as child_name','a.id as child_id','a.slug as child_slug','b.name as parent_name','b.id as parent_id','b.slug as parent_slug')
    // ->select(DB::raw())
    // ->where('a.id','2')
    // ->first();

    // dd($sample);
    $posts = $this->customQuery->getPosts();
    return view('pages.home',compact('posts'));
  }

  public function single($category,$slug)
  {
    $post = $this->customQuery->getPost($slug,$category);

    $widget_rating = WidgetRating::where('post_id',$post->post_id)->first();

    if($post == null)
    {
      App::abort(404);
    }

    return view('pages.single',compact(['post','widget_rating']));
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
    $rate_items = 
      DB::table('rate_items')
      ->join('users','rate_items.user_id','=','users.id')
      ->leftjoin('rate_results', 'rate_items.id','=', 
      DB::raw('rate_results.rate_item_id AND rate_results.user_id = ' . Auth::user()->id))
      ->select('rate_items.id as rate_item_id','rate_items.name as rate_name','rate_items.description as rate_description','rate_items.image_url as rate_image_url ','users.name as user_name','users.id as user_id','users.avatar','rate_results.result_yes as upmire','rate_results.result_no as downmire',DB::raw('(SELECT COUNT(1) FROM rate_comments WHERE rate_comments.rate_item_id = rate_items.id) as comment_count'))
      ->orderBy('rate_items.id','DESC')
      ->get();


    foreach ($rate_items as $rate_item) {

      $rate_item->comments = 
        DB::select("
        SELECT * FROM 
        ( SELECT b.id,b.name,b.avatar,a.content,a.created_at,a.id as comment_id
       FROM rate_comments a
       JOIN users b
       ON a.user_id = b.id
       WHERE a.rate_item_id = ".$rate_item->rate_item_id."
       ORDER BY a.id DESC
       LIMIT 5
           ) tmp ORDER BY tmp.comment_id ASC
        ");
    }

    $rate_categories = RateCategory::where('parent_id',0)->get();

    return view('pages.rate',compact(['rate_items','rate_categories']));  
  }

  public function rateCategory($category)
  {
    return 'category';
  }

  public function rateUpload(Request $request)
  {
    // getting all of the post data
    $file = array('file' => $request->file('file'));
    // setting up rules
    //$rules = array('file' => 'required','file' => 'mimes:jpeg,png,bmp'); //mimes:jpeg,bmp,png and for max size max:10000
    $rules = array('file' => 'required|mimes:jpeg,png,bmp'); 
    // doing the validation, passing post data, rules and the messages
    $validator = Validator::make($file, $rules);

    if ($validator->fails()) 
    {
      // return $validator->messages();
      return Redirect::back()->withErrors($validator->messages());
    }
    else 
    {

      // checking file is valid.
      $originalName = $request->file('file')->getClientOriginalName();

      if ($request->file('file')->isValid()) 
      {
        $destinationPath = 'uploads'; // upload path
        // $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
        //$originalName = Input::file('file')->getClientOriginalName();
        $fileName = rand(11111,99999).'_'.strtolower($originalName); // renameing image
        $fileSize = $request->file('file')->getSize();

        $request->file('file')->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        // Session::flash('success', 'Upload successfully'); 

        $file['file_name'] = strtolower($fileName); 
        $file['file_size'] = $fileSize / 1024;

        $rate_category_slug = RateCategory::where('slug',$request->input('rate_categories_child'))->first();
        $rateItem = new RateItem;
        $rateItem->image_url = $file['file_name'];
        $rateItem->user_id = Auth::user()->id;
        $rateItem->name = $request->input('name');
        $rateItem->category_id = $rate_category_slug->id;
        $rateItem->description = $request->input('description');
        

        $rateItem->save();

        return redirect('rate');
      }
      else 
      {
        // return 'not successfully uploaded: '.$request->file('file')->getErrorMessage();
        return Redirect::back()->withErrors(['error', 'file not valid']);
      }
    }
  }

  public function dashboard()
  {       
    if(Auth::check())
    {
      $rateItems = RateItem::all();
      return view('pages.dashboard',compact('rateItems'));   
    }
    return redirect('/');
  }

  public function addProduct(Request $request)
  {
    // getting all of the post data
    $file = array('file' => $request->file('file2'));
    // setting up rules
    //$rules = array('file' => 'required','file' => 'mimes:jpeg,png,bmp'); //mimes:jpeg,bmp,png and for max size max:10000
    $rules = array('file' => 'required|mimes:jpeg,png,bmp'); 
    // doing the validation, passing post data, rules and the messages
    $validator = Validator::make($file, $rules);

    if ($validator->fails()) 
    {
      // return $validator->messages();
      return Redirect::back()->withErrors($validator->messages());
    }
    else 
    {

      // checking file is valid.
      $originalName = $request->file('file2')->getClientOriginalName();

      if ($request->file('file2')->isValid()) 
      {
        $destinationPath = 'uploads'; // upload path
        // $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
        //$originalName = Input::file('file')->getClientOriginalName();
        $fileName = rand(11111,99999).'_'.strtolower($originalName); // renameing image
        $fileSize = $request->file('file2')->getSize();

        $request->file('file2')->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        // Session::flash('success', 'Upload successfully'); 

        $file['file_name'] = strtolower($fileName); 
        $file['file_size'] = $fileSize / 1024;


        $rateItem = new RateItem;
        $rateItem->image_url = $file['file_name'];
        $rateItem->user_id = Auth::user()->id;
        $rateItem->category_id = 10;
        $rateItem->name = $request->input('name');
        $rateItem->animal_tested = $request->input('animal_tested');
        $rateItem->eco_friendly = $request->input('eco_friendly');
        $rateItem->intended_applicaion = $request->input('intended_applicaion');
        $rateItem->price_range = $request->input('price_range');
        $rateItem->alt_products = $request->input('alt_products');
        $rateItem->approved = 0;
        $rateItem->available_from = $request->input('available_from');

        $rateItem->save();

        return redirect('dashboard');
      }
      else 
      {
        // return 'not successfully uploaded: '.$request->file('file')->getErrorMessage();
        return Redirect::back()->withErrors(['error', 'file not valid']);
      }
    }
  }
}
