<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table) { //first argument is name of table, second is a closure 
			$table->increments('id'); 
			$table->string('post_title', 150);
			$table->text('post_info');
			$table->integer('price');
			$table->string('seller_email');
			$table->string('item_condition');
			$table->integer('image1_id');
			$table->integer('image2_id');
			$table->integer('image3_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
