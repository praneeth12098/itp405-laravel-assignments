<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Playlists</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<h1>{{$playlist->Name}}</h1>

		<h3>Tracks</h3>
		<ul>
			@foreach($tracks as $track)
				<li> 
					{{$track->Name}}
				</li>
			@endforeach
		</ul>
	</body>
</html>