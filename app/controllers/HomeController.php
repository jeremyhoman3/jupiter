<?php

class HomeController extends BaseController {

	public function index()
	{
		$posts = Post::get();
			// print_r($post); // test to see if post is pulled 
		return View::make('home')->with('posts', $posts); // make $posts var available in home.blade.php
	}

}
