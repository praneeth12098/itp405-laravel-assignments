@extends('main-layout')
@section('title', 'Playlists')

@section('content')
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