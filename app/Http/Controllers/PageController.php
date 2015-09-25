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
    if(!Auth::check())
    {
      return redirect('login');
    }
    return view('pages.rate');  
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
