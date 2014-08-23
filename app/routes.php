<?php

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::get('/howitworks', 'PagesController@howItWorks');

Route::get('/contact', 'PagesController@contact');

Route::get('/postitem', 'PagesController@postItem');

Route::post('uploadItem', 'PagesController@uploadItem');

Route::get('/postitemsuccess', 'PagesController@postitemsuccess');

Route::get('{id}', function($id)
{
	$post_id = Post::whereId($id)->first();
	return View::make('post', ['id' => $post_id]);
}); 
