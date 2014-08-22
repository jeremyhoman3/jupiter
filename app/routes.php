<?php

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::get('/howitworks', 'PagesController@howItWorks');

Route::get('/postitem', 'PagesController@postItem');

Route::post('uploadItem', 'PagesController@uploadItem');

Route::get('/postitemsuccess', 'PagesController@postitemsuccess');

Route::get('{id}', function($id)
{
	$post_id = Post::whereId($id)->first();
	return View::make('post', ['id' => $post_id]);
}); // this should open the post page

//what if i did something like route:get($url, 'postcontroller@viewpost') 
// and then define $url as the post id - that might work
//