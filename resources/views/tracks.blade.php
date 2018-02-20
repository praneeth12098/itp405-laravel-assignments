<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Track Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	</head>

	<body>
		<table class="table">
			@if(!empty($genre['Name'])) <h1>{{$genre->Name}}</h1> @endif
			<tr>
				<th>Track</th>
				<th>Album</th>
				<th>Artist</th>
				<th>Media Type</th>
				<th>Price</th>
			</tr>
			<?php foreach($tracks as $track) : ?>
			<tr>
				<td>{{$track->Name}}</td>
				<td>{{$track->Album->Title}}</td>
				<td>{{$track->Album->Artist->Name}}</td>
				<td>{{$track->MediaType->Name}}</td>
				<td>{{$track->UnitPrice}}</td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>