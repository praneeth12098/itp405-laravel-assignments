@extends('main-layout')

@section('title', 'Create a Review')

@section('content')
	<h1>Add a Review</h1>

	@if($errors->isNotEmpty())
		<div class="alert alert-danger" role="alert">
			@foreach($errors->all() as $message)
				{{$message}}
			@endforeach
		</div>
	@endif

	<form action="/albums/{id}/reviews" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label for="reviewTitle">Review Title</label>
			<input type="text" value="{{old('reviewTitle')}}"id="reviewTitle" name="reviewTitle" class="form-control">

			<label for="review">Review</label>
			<input type="text" value="{{old('review')}}"id="review" name="review" class="form-control">
		</div>
		<input name="hiddenId" type="hidden" value="{{$album->AlbumId}}">
		<button type="submit" class="btn btn-primary">Add</button>
	</form>
@endsection