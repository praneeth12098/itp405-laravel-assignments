@extends('main-layout')
@section('title', 'Playlists')

@section('content')
	<a href="/playlists/new">Add Playlist</a>
	<ul>
		@foreach($playlists as $playlist)
			<li>
				<a href="/playlists/{{$playlist->PlaylistId}}">
					{{$playlist->Name}}
				</a>
			</li>
		@endforeach
	</ul>
@endsection