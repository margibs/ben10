<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@home');

//To Delete
Route::get('sample', 'PageController@sample');
Route::post('ajax_sample','PageController@ajaxSample');

//Ajax
Route::post('ajax_get_child','PageController@ajaxGetChild');


Route::group(['middleware' => 'AuthCheck'], function()
{
	//Dashboard
	Route::get('dashboard', 'PageController@dashboard');
	Route::post('dashboard','PageController@addProduct');
	Route::get('item','PageController@item');
	
	//RateController
	Route::get('rate', 'PageController@rate');
	Route::post('rate/rate_upload','PageController@rateUpload');
	Route::get('rate/{category?}', 'PageController@rateCategory');

});


Route::group(['middleware' => 'UserCheck'], function()
{
	//AdminController
	Route::get('admin','AdminController@posts');
	Route::get('admin/media_file','AdminController@mediaFiles');
	Route::post('admin/media_file_upload', 'AdminController@media_file_upload');
	Route::get('admin/users','AdminController@users');
	
	Route::get('admin/media_gallery','AdminController@mediaGallery');
	
	Route::get('admin/settings','AdminController@adminSettings');

	Route::get('admin/posts','AdminController@posts');
	Route::get('admin/drafts','AdminController@drafts');
	Route::get('admin/trash','AdminController@trash');
	Route::get('admin/posts/media_file','AdminController@mediaFiles');
	Route::get('admin/posts/{id}/delete','AdminController@deletePost');
	Route::get('admin/posts/{id}','AdminController@editPost');

	Route::get('admin/new_post','AdminController@newPost');
	Route::post('admin/new_post/{id?}','AdminController@addPost');

	Route::get('admin/categories','AdminController@categories');
	Route::post('admin/categories','AdminController@addCategory');

	Route::get('admin/links','AdminController@links');

	Route::post('admin/new_link/{id?}','AdminController@addLink');
	Route::get('admin/new_link','AdminController@newLink');
	
	Route::get('admin/edit_link/{id}','AdminController@editLink');

	Route::get('admin/comments','AdminController@comments');

	Route::get('admin/ajax_get_media_file','AdminController@ajaxGetMediaFile');
	Route::post('admin/ajax_delete_image','AdminController@ajaxDeleteImage');
	Route::post('admin/ajax_upload_image','AdminController@ajaxUploadImage');
	Route::post('admin/ajax_check_content','AdminController@ajaxCheckContent');

	//Plugin Routes
	Route::get('plugin/rate/categories','RateController@categories');
	Route::post('plugin/rate/categories','RateController@addCategories');
	Route::get('plugin/rate/items/{approved}','RateController@items');
	Route::get('plugin/rate/items/{approved?}/{item_id?}','RateController@itemApprove');
	Route::get('plugin/rate/ajax_check_product','RateController@ajaxCheckProduct');

});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

//Single BLog
Route::get('{category}','PageController@category');
Route::get('{category}/{slug?}','PageController@single');
