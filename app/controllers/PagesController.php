<?php

class PagesController extends BaseController {

	public function howItWorks() {
		return View::make('howItWorks');
	}

	public function contact() {
		return View::make('contact');
	}

	public function postItem() {
		return View::make('postItem');
	}

	public function postitemsuccess() {
		return View::make('postitemsuccess');
	}

	public function uploadItem() {

		$min = 1111111;
		$max = 9999999;

		$destinationPath = 'uploads';
		
		$filename1 = rand($min, $max); //store as id in database, so i can grab the right images
		$filename2 = rand($min, $max);
		$filename3 = rand($min, $max);  

		$post_title = Input::get('post_title');
		$post_info = Input::get('post_info');
		$price = Input::get('price');
		$seller_email = Input::get('seller_email');
		$item_condition = Input::get('item_condition');

		$rules = array(
			'seller_email' => 'required|email',
			'post_title' => 'required|min:3',
			'post_info' => 'required',
			'price' => 'required|numeric',
			'item_condition' => 'required',
			'image1' => 'image', //add required piece later
			'image2' => 'image',
			'image3' => 'image'
		);


		//get all post data
		$postData = Input::all();
		$validator = Validator::make($postData, $rules);

		if ($validator->fails())
		{
			return Redirect::to('postitem')->withInput()->withErrors($validator);
		}
		
		//insert form fields into database
		DB::insert('insert into posts (post_title, post_info, price, seller_email, item_condition, image1_id, image2_id, image3_id) 
			values (?, ?, ?, ?, ?, ?, ?, ?)', 
			array ($post_title, $post_info, $price, $seller_email, $item_condition, $filename1, $filename2, $filename3));

		//move images to uploads folder and rename them
		if (Input::hasFile('image1'))
		{
			Input::file('image1')->move($destinationPath, $filename1);
		} 

		if (Input::hasFile('image2'))
		{
			Input::file('image2')->move($destinationPath, $filename2);
		} 

		if (Input::hasFile('image3'))
		{
			Input::file('image3')->move($destinationPath, $filename3);
		} 

		$post_id = DB::table('posts')->orderBy('id', 'desc')->first();
		var_dump($post_id);
		URL::to('$post_id');

		return Redirect::to('postitemsuccess');
	}
}	