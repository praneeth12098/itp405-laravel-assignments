<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Album Reviews</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

		<style>
			h6 {
				text-align: center;
			}
		</style>
	</head>

	<body>
		<table class="table">
			<h1>{{$album->Title}}</h1>
			<tr>
				<th>Review Title</th>
				<th>Review</th>

			</tr>
			<?php foreach($reviews as $review) : ?>
			<tr>
				<td>{{$review->title}}</td>
				<td>{{$review->body}}</td>
			</tr>
			<?php endforeach ?>
		</table>

		<h6><a href = "/albums/{{$album->AlbumId}}/reviews/new" >Write a Review</a></h6>

	</body>