@extends('main-layout')
@section('title', 'Playlists')

@section('content')
	<h1><a href="/playlists/new">Add Playlist</h1>
	<table class="table">
		<tr>
			<th>Playlist Name</th>
			<th>Do you wish to Edit?</th>
			<th>Do you wish to Delete?</th>
		</tr>
		@foreach($playlists as $playlist)
		<tr>
			<td>
				<a href="/playlists/{{$playlist->PlaylistId}}">
					{{$playlist->Name}}
				</a>
			</td>

			<td>
				<a href="/playlists/{{$playlist->PlaylistId}}/edit">Edit</a>
			</td>

			<td>
				<a href="/playlists/{{$playlist->PlaylistId}}/delete">Delete</a>
			</td>
		<tr>
		@endforeach
	</table>
@endsection