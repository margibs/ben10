<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

use App;
use DB;
use Auth;
use Session;
use Validator;
use File;

use Facebook\Facebook;
use Thujohn\Twitter\Facades\Twitter;

use App\User;

use App\Model\Category;
use App\Model\Link;
use App\Model\MediaFile;
use App\Model\PostCategory;
use App\Model\Post;
use App\Model\Comment;
use App\Model\LinksCountry;


use App\CustomQuery;
use App\CommonFunctions;

class AdminController extends Controller
{   
    private $customQuery;

    public function __construct(CustomQuery $customQuery)
    {
        $this->customQuery = $customQuery;
    }
	public function index()
	{
		return 'ADMIN HOMEPAGE!';
	}

    public function adminSettings()
    {
        return view('admin.adminSettings');
    }

	public function users()
	{
		$data['users'] = User::all();

        return view('admin.users',$data);
	}
    
    //POSTS
	public function posts()
	{
        $data['post_name'] = 'Posts';
		$data['posts'] = Post::where('status','=',1)->orderBy('id','DESC')->paginate(15);
        //Loop post to get its categories
		foreach ($data['posts'] as $post) 
        {
            $post->categories = $this->customQuery->getPostCategories($post->id,true);
		}

		return view('admin.posts',$data);
	}

    public function drafts()
    {        
        $data['post_name'] = 'Drafts';
        $data['posts'] = Post::where('status','=',0)->orderBy('id','DESC')->paginate(15);
        //Loop post to get its categories
        foreach ($data['posts'] as $post) 
        {
            $post->categories = $this->customQuery->getPostCategories($post->id,true);
        }

        return view('admin.posts',$data);
    }

    public function trash()
    {
    	$data['post_name'] = 'Trash';
        $data['posts'] = Post::where('status','=',3)->orderBy('id','DESC')->paginate(15);
        //Loop post to get its categories
        foreach ($data['posts'] as $post) 
        {
            $post->categories = $this->customQuery->getPostCategories($post->id,true);
        }

        return view('admin.posts',$data);
    }

    public function newPost()
    {

        $data['categories'] = Category::all();
        return view('admin.newPost',$data);
    }

    public function editPost($id)
    {
        $data['post'] = Post::find($id);
        $data['shared_fb_status'] = false;
        $data['shared_twitter_status'] = false;

        if($data['post']->shared_fb == 1)
        {
            $data['shared_fb_status'] = true;
        }

        if($data['post']->shared_twitter == 1)
        {
            $data['shared_twitter_status'] = true;
        }

        $data['categories'] = $this->customQuery->getSelectedPostCategories($id);
        
        return view('admin.editPost',$data);
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->status = 3;
        $post->save();

        return redirect('admin/posts');
    }

	public function addPost(Request $request,$id = 0)
	{
        $redirect = 'admin/new_post';  

        //check if new post or edit post
        //get redirect
        if($id != 0)
        {
            $redirect = 'admin/posts/'.$id;
        }

        //Validate input
		$validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ]);

    	if ($validator->fails()) 
        {
            return redirect($redirect)
                        ->withErrors($validator)
                        ->withInput();
        }

        //check if new post or edit post
        if($id != 0)
        {
            $post = Post::find($id);
        }
        else
        {
            $post = new Post;
            $post->slug = $this->getPostSlug($request->input('title'));
            $post->user_id = Auth::user()->id;
        }
        
        $post->excerpt = $request->input('excerpt');
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->status = 0;
        $post_fb_now = false;
        $post_twitter_now = false;

        if($request->input('status') != null)
        {
            $post->status = $request->input('status');

            if($request->input('shared_fb') == 1)
            {
                if($post->shared_fb == 0 || $post->shared_fb == null)
                {
                    $post->shared_fb = 1;
                    $post_fb_now = true;
                }
            }

            if($request->input('shared_twitter') == 1)
            {
                if($post->shared_twitter == 0 || $post->shared_twitter == null)
                {
                    $post->shared_twitter = 1;
                    $post_twitter_now = true;
                }
            }
        }
		
        if($request->input('feat_image_url') != '')
        {
          $post->feat_image_url = $request->input('feat_image_url');  
        }

		$post->save();

        PostCategory::where('post_id','=',$post->id)->delete();

        if( count( $request->input('category_id') ) != 0 )
        {
            $data = array();

            for ($i=0; $i < count($request->input('category_id')) ; $i++) 
            { 
                $data[] = array('post_id' => $post->id,'category_id' => $request->input('category_id')[$i],'created_at' => date('Y-m-d H:i:s'), 'updated_at'=> date('Y-m-d H:i:s'));
            }

            PostCategory::insert($data);
        }
        else
        {
            // For Uncategorized category
            $postCategories = new PostCategory;
            $postCategories->post_id = $post->id;
            $postCategories->category_id = 1;
            $postCategories->save();
        }

        $get_category = $this->customQuery->getPostCategories($post->id,false);
        $blog_url = "http://alllad.com/".$get_category->slug.'/'.$post->slug;

        if($post_fb_now)
        {
            $linkData = [
                "message" => $post->title,
                "link" => $blog_url,
                "picture" => 'http://alllad.com/uploads/'.$post->feat_image_url,
                "name" => $post->title,
                "caption" => "alllad.com",
                "description" => $post->excerpt
            ];
            $this->shared_fb($linkData);
        }

        if($post_twitter_now)
        {
            $shorten_url = $this->google_shorten($blog_url);

            $twitter_message = $post->title.' '.$shorten_url;

            if(strlen($post->title) > 90)
            {
                $twitter_message = substr($post->title,0,90).'... '.$shorten_url;
            }

            $twitter_file = 'uploads/'.$post->feat_image_url;

            $uploaded_media = Twitter::uploadMedia(['media' => File::get(public_path($twitter_file))]);
            Twitter::postTweet(['status' => $twitter_message, 'media_ids' => $uploaded_media->media_id_string]);
        }

        return redirect('admin/posts');
	}
    //END POSTS

    //CATEGORIES
	public function categories()
	{
		$data['categories'] = Category::all();
		return view('admin.categories',$data);
	}

	public function addCategory(Request $request)
	{
		$messages = [
		    'name.required' => 'Category name is required',
		    'name.unique' => 'Category name is not available',
		    'name.max' => 'Category name may not be greater than 200 characters.',
		];

		$validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:200'
        ],$messages);

    	if ($validator->fails()) {
            return redirect('admin/categories')
                        ->withErrors($validator)
                        ->withInput();
        }

        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = $this->getCategorySlug($request->input('name'));
        $category->save();

        return  redirect('admin/categories');
	}
    //END CATEGORIES

    //LINKS
    public function links()
    {
        $data['links'] = Link::all();
        return view('admin.links',$data);
    }

    public function newLink()
    {
        return view('admin.newLink');
    }

    public function editLink($id)
    {
        $link = Link::find($id);
        $country_codes = [];
        $countries = LinkCountry::where('links_id',$link->id)->get(['country_code']);

        foreach ($countries as $country) {
            $country_codes[] = $country->country_code;
        }

        return view('admin.editLink',compact('link','country_codes'));
    }

    public function addLink(Request $request,$id = 0)
    {
        // dd($request->all());
        $redirect = 'admin/new_link';  

        //check if new post or edit post
        //get redirect
        if($id != 0)
        {
            $redirect = 'admin/edit_link/'.$id;
        }

        $validator = Validator::make($request->all(), [
            'url' => 'required',
            'image' => 'required',
            'website_url' => 'required',
            'countries' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect($redirect)
                        ->withErrors($validator)
                        ->withInput();
        }

        //check if new post or edit post
        if($id != 0)
        {
            $link = Link::find($id);
        }
        else
        {
            $link = new Link;
        }

        $link->url = $request->input('url');
        $link->image = $request->input('image');
        $link->description = $request->input('description');
        $link->website_url = $request->input('website_url');
        $link->visible = $request->input('visible');
        $link->save();

        LinkCountry::where('links_id','=',$link->id)->delete();
        if( count( $request->input('countries') ) != 0 )
        {
            $data = array();

            for ($i=0; $i < count($request->input('countries')) ; $i++) 
            { 
                $data[] = array('links_id' => $link->id,'country_code' => $request->input('countries')[$i],'created_at' => date('Y-m-d H:i:s'), 'updated_at'=> date('Y-m-d H:i:s'));
            }

            LinkCountry::insert($data);
        }

        return redirect('admin/links');

    }
    //END LINKS

    public function mediaGallery()
    {
        $media_files = MediaFile::orderBy('id','DESC')->paginate(20);
        return view('admin.mediaGallery',compact('media_files'));
    }
	public function mediaFiles()
	{
        $data['media_files'] = MediaFile::orderBy('id','DESC')->take(10)->get();
		return view('admin.media_file',$data);
	}

    public function media_file_upload(Request $request)
    {

        // getting all of the post data
        $file = array('file' => $request->file('file'),'item_label' => $request->input('item_label'));
        // setting up rules
        //$rules = array('file' => 'required','file' => 'mimes:jpeg,png,bmp'); //mimes:jpeg,bmp,png and for max size max:10000
        $rules = array('file' => 'required|mimes:jpeg,png,bmp','item_label' => 'required'); 
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
              Session::flash('success', 'Upload successfully'); 

              $file['file_name'] = strtolower($fileName); 
              $file['file_size'] = $fileSize / 1024;


              $meadiFiles = new MediaFile;
              $meadiFiles->image_url = $file['file_name'];
              $meadiFiles->user_id = Auth::user()->id;
              $meadiFiles->title = $request->input('item_label');
              $meadiFiles->save();

              return redirect('admin/media_file');
            }
            else 
            {
              // return 'not successfully uploaded: '.$request->file('file')->getErrorMessage();
                return Redirect::back()->withErrors(['error', 'file not valid']);
            }
        }
    
    }

	public function comments()
	{

		$comments =
				DB::table('comments')
				->join('users','comments.user_id','=','users.id')
                ->leftJoin('posts','comments.post_id','=','posts.id')
                ->join('post_categories','posts.id','=','post_categories.post_id')
                ->join('categories','post_categories.category_id','=','categories.id')
                ->select('users.name','comments.content','comments.created_at','comments.approved','posts.slug','posts.id','categories.slug as catslug')
				->paginate(15);

        // dd($comments);

		return view('admin.comments',compact('comments'));
	}

    //AJAX
    public function ajaxGetMediaFile()
    {
        return json_encode(MediaFile::orderBy('id','DESC')->take(10)->get());
    }

    public function ajaxDeleteImage(Request $request)
    {
        $mediaFile = MediaFile::find($request->input('image_id'));
        $image_url = $mediaFile->image_url;
        $mediaFile->delete();
        File::Delete(public_path('uploads/'.$image_url));
        
        return 'image delete';
    }
    public function ajaxUploadImage(Request $request)
    {
        // getting all of the post data
        $file = array('file' => $request->file('myfile'));
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
            $originalName = $request->file('myfile')->getClientOriginalName();

            if ($request->file('myfile')->isValid()) 
            {
              $destinationPath = 'uploads'; // upload path
              // $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
              //$originalName = Input::file('file')->getClientOriginalName();
              $fileName = rand(11111,99999).'_'.strtolower($originalName); // renameing image
              $fileSize = $request->file('myfile')->getSize();

              $request->file('myfile')->move($destinationPath, $fileName); // uploading file to given path

              $file['file_name'] = strtolower($fileName); 
              $file['file_size'] = $fileSize / 1024;


              $mediaFile = new MediaFile;
              $mediaFile->image_url = $file['file_name'];
              $mediaFile->user_id = Auth::user()->id;
              $mediaFile->title = strtolower($originalName);
              $mediaFile->save();

              return json_encode(MediaFile::find($mediaFile->id));
            }
            else 
            {
              // return 'not successfully uploaded: '.$request->file('file')->getErrorMessage();
             // return Redirect::back()->withErrors(['error', 'file not valid']);
            }
        }

    }
    //END AJAX

    //COMMON FUNCTIONS
    public function shared_fb($linkData)
    {
        
        $config = array();
        $config['app_id'] = '1477336432588187';
        $config['app_secret'] = 'c5b66416be056c880147ae77d88f1aad';
        // $config['fileUpload'] = false; // optional
         
        $fb = new Facebook($config);

        try {
          // Returns a `Facebook\FacebookResponse` object
          $response = $fb->post('/600041156765457/feed', $linkData, 'CAAUZCoTFHNZAsBAH7dKZCNBgu25ZCdBIaFfSIwlmzvMqLZBjOA64FucuoHNR7YkwKgAMZC5mJwXJWfdDZAF9lOCAQIR9MkkHK4qW3175tsv3KrvJQWO7vlkBdUFMJ93f0HZBYrIGSUo8D7kCWZBnk0f2wWIhsdvuHLLZBsuM72Q5tQa3fwCbRtJTL2eZAVoemET6dAZD');
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }
    }

    public function google_shorten($url)
    {
        // Get API key from : http://code.google.com/apis/console/
        $apiKey = 'AIzaSyACvNKMmB7-WpRRL_bRSXLm7YSCAM4CmB4';

        $postData = array('longUrl' => $url);
        $jsonData = json_encode($postData);

        $curlObj = curl_init();

        curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);
        curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlObj, CURLOPT_HEADER, 0);
        curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
        curl_setopt($curlObj, CURLOPT_POST, 1);
        curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($curlObj);
        // Change the response json string to object
        $json = json_decode($response);

        curl_close($curlObj);

        return $json->id;
    }
    //END COMMON FUNCTIONS
    //SLUGS

	public function getCategorySlug($value, $slug_check = false)
    {
        if (!$slug_check)
        {
            $slug = Str::slug($value);
        }
        else
        {
            $slug = $value;
        }
        

        if($slug == 'new')
        {
            $slug = 'new_0';
        }
   
        $slugCount = (Category::where('slug','like',$slug.'%')->count()); 

        if ($slugCount >0)
        {
            $slugCount ++;
            return  $slug.'-'.($slugCount);
        }
        else
        {
            return $slug;
        }

    }

    public function getPostSlug($value, $slug_check = false)
    {
        if (!$slug_check)
        {
            $slug = Str::slug($value);
        }
        else
        {
            $slug = $value;
        }
        

        if($slug == 'new')
        {
            $slug = 'new_0';
        }
   
        $slugCount = (Post::where('slug','like',$slug.'%')->count()); 

        if ($slugCount >0)
        {
            $slugCount ++;
            return  $slug.'-'.($slugCount);
        }
        else
        {
            return $slug;
        }
    }

    public function ajaxCheckContent(Request $request)
    {
        $_username = 'nbbulk2014';

        $_apikey = '0wn4xoctsdnlcnnn';

        $_apiurl = 'http://www.copyscape.com/api/?';

        $content = $request->input('content');

        // $content = "When in the course of human events, it becomes necessary for one people to dissolve the political bands which have connected them with another, and to assume the Powers of the earth, the separate and equal station to which the Laws of Nature and of Nature's God entitle them, a decent respect to the opinions of mankind requires that they should declare the causes which impel them to the separation.";

        $apiurl = $_apiurl.'u=nbbulk2014&k=0wn4xoctsdnlcnnn&o=csearch&e='.urlencode('UTF-8').'&c=5';

        //search by text

        $curl=curl_init();

        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        curl_setopt($curl, CURLOPT_POST,1);
        curl_setopt($curl, CURLOPT_POSTFIELDS,urlencode($content));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response=curl_exec($curl);

        $sites = simplexml_load_string ($response);

        curl_close($curl);

        return json_encode($sites);
    }

 
}
