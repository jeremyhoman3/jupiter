@extends('templates.default') 

@section('content')
	<article>

		<h2>{{ $id->id }}</h2>
		<h2>huh</h2>
		<p> [images will go here] </p>
		<p>Price goes here</p>
		<p>{{if ($id->item_condition = 'G') {
			echo 'Good';
		} }}</p>
		<p>{{ $id->post_info }}</p>
		<a href="">Contact Seller Button</a>
	</article>
@stop	