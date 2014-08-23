@extends('templates.default') 

@section('content')
	<article>

		<h2>{{ $id->post_title }}</h2>
		<img src="uploads/{{ $id->image1_id }}">
		<img src="uploads/{{ $id->image2_id }}">
		<img src="uploads/{{ $id->image3_id }}">
		<p>${{ $id->price }}</p>
		<p>Condition: {{ $id->item_condition }}</p>
		<p>{{ $id->post_info }}</p>
		<a href="">Contact Seller Button</a>
	</article>
@stop	