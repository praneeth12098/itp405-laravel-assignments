@extends('main-layout')

@section('title', 'Edit Playlist')

@section('content')
	<h1>Edit Playlist</h1>

	@if($errors->isNotEmpty())
		<div class="alert alert-danger" role="alert">
			@foreach($errors->all() as $message)
				{{$message}}
			@endforeach
		</div>
	@endif

	<form action="/editplaylists" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label for="playlist">Playlist Name</label>
			<input type="text" value="{{old('playlist')}}" id="playlist" name="playlist" class="form-control" placeholder="{{$playlist->Name}}">
		</div>
		<input name="hiddenId" type="hidden" value="{{$playlist->PlaylistId}}">
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
@endsection