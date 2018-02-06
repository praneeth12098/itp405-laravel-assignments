<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Track Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	</head>

	<body>
		<table class="table">
			<tr>
				<th>Track</th>
				<th>Album</th>
				<th>Artist</th>
				<th>Price</th>
			</tr>
			<?php foreach($tracks as $track) : ?>
			<tr>
				<td>{{$track->trackName}}</td>
				<td>{{$track->albumTitle}}</td>
				<td>{{$track->artistName}}</td>
				<td>{{$track->trackPrice}}</td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>