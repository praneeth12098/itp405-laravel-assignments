<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Playlists</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<ul>
			@foreach($playlists as $playlist)
				<li>
					<a href="/playlists/{{$playlist->PlaylistId}}">
						{{$playlist->Name}}
					</a>
				</li>
			@endforeach
		</ul>
	</body>
</html>