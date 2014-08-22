 @extends('templates.default')

 @section('content')

 	@if($posts->count())
 		@foreach($posts as $post)
 			<div class="post">
  			<a href="{{ $post->id }}">
  			<h4> ${{ $post->price }} - {{ $post->post_title }}</h4></a>
 			</div>
		@endforeach
	@endif		
 @stop 