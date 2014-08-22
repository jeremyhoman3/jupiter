 <?php

 class PostsTableSeeder extends Seeder {
 	public function run() {
 		DB::table('posts')->delete(); // remove everything inside table 

 		$posts = array(
 			array (
 				'post_title' => 'Brown Couch, good condition',
 				'post_info' => 'Bought it new last year. It was build by my Grandpa, who was a really special fellow.',
 				'price' => 80,
 				'seller_email' => 'sasquatch_jenkins@aol.com',
 				'item_condition' => 'Excellent',
 				'image1_id' => '111111111111',
 				'image2_id' => '222222222222',
 				'image3_id' => '333333333333'
 			),

 			array (
 				'post_title' => 'Beer pong table, memories to be had',
 				'post_info' => 'This beer pong table hosted 3 straight whitewater olympic beer pong tournaments. 
 				But I need to pay my rent somehow.',
 				'price' => 40,
 				'seller_email' => 'maddenmaster@gmail.com',
 				'item_condition' => 'Good',
 				'image1_id' => '444444444444',
 				'image2_id' => '555555555555',
 				'image3_id' => '666666666666'
 			),

 			array (
 				'post_title' => 'Finally getting out of this place - buy my chairs',
 				'post_info' => 'I got four chairs, selling them for 15 a piece.',
 				'price' => 15,
 				'seller_email' => 'bartender@gmail.com',
 				'item_condition' => 'So-so',
 				'image1_id' => '777777777777',
 				'image2_id' => '888888888888',
 				'image3_id' => '999999999999'
 			)	
 		);

 		DB::table('posts')->insert($posts); //insert array into posts table
 	}
 }
