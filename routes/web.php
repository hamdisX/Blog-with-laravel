<?php
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as' => 'home', 'uses' => 'PostController@index']);
Auth::routes();


Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);







Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-post','PostController@create');

	// save new post
	Route::post('new-post','PostController@store');

	// edit post form
	Route::get('edit/{slug}','PostController@edit');

	// update post
	Route::post('update','PostController@update');

	// delete posts
	Route::get('delete/{id}','PostController@destroy');

	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');

	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');


	// add comment
	Route::post('comment/add','CommentController@store');

	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');


	Route::get('/panel/comment', 'CommentController@indexs');
	route::get('/panel/comment/{id}',function($id){
		$cv=App\Comments::find($id);
		$cv->delete();
		return redirect ('/panel/comment') ;
	});



	route::get('/panel/dashbord', 'UserController@dashbord');

	route::get('/panel/post', 'PostController@shows');
	route::get('/panel/post/{id}',function($id){
		$cv=App\Posts::find($id);
		$cv->delete();
		return redirect ('/panel/post') ;
	});
//gestion users
	Route::get('/panel', 'UserController@index');
	Route::get('/panel/{id}/edit', 'UserController@edit');
  Route::put('/panel/{id}', 'UserController@update');
  route::get('/panel/{id}',function($id){
	  $cv=App\User::find($id);
	  $cv->delete();
	  return redirect ('/panel') ;
	});

	//gestion comments





});




//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');













