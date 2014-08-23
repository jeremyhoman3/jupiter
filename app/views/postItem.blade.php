 @extends('templates.default')

 @section('content')

 	@if($errors->has())
 		@foreach($errors->all() as $error)
 		<div class="error">{{ $error }}</div></br>
 		@endforeach
	@endif	

 	<div id="form">
 	{{ Form::open(array('action' => 'PagesController@uploadItem', 'files' => true, 'enctype' => 'multipart/form-data')) }}
	

 	<div>
 	{{ Form::label('seller_email', 'Email Address:') }}
 	{{ Form::text('seller_email') }}
 	</div></br>


 	<div>
 	{{ Form::label('post_title', 'Post Title:') }}
 	{{ Form::text('post_title') }}
 	</div></br>

 	<div>
 	{{ Form::label('post_info', 'Post Info:') }}
 	{{ Form::text('post_info') }}
 	</div></br>

 	<div>
 	{{ Form::label('price', 'Price: $') }}
 	{{ Form::text('price') }}
 	</div></br>

 	<div>
 	{{ Form::label('item_condition', 'Condition') }}
 	{{ Form::select('item_condition', array('Excellent' => 'Excellent', 'Good' => 'Good', 'So-so' => 'So-so'), 'G') }}
 	</div></br>

 	<div>
 	{{ Form::label('image1', 'Image #1') }}
 	{{ Form::file('image1') }}
 	</div>

 	<div>
 	{{ Form::label('image2', 'Image #2') }}	
 	{{ Form::file('image2') }}
 	</div>

 	<div>
 	{{ Form::label('image3', 'Image #3') }}
 	{{ Form::file('image3') }}
 	</div></br>

 	<div>
 	{{ Form::submit('Post Item') }}
 	</div>

 	{{ Form::close() }}
 	</div>
 @stop
