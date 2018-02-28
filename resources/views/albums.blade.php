@extends('main-layout')

@section('title', 'Albums')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Artist's Albums</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	</head>

	<body>
		<table class="table">
			@if(!empty($artist['ArtistId'])) <h1>{{$artist->Name}}</h1> @endif
			<tr>
				<th>Albums</th>
			</tr>
			<?php foreach($albums as $album) : ?>
			<tr>
				<td><a href="/albums/{{$album->AlbumId}}/reviews">{{$album->Title}}</a></td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>
@endsection