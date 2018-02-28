<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Artists</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<style>
			.table td {
				text-align: center;
			}

			.table th {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<table class="table">
			<tr>
				<th>Artist</th>
			</tr>
			@foreach($artists as $artist)
			<tr>
				 <td><a href="/artists/{{$artist->ArtistId}}/albums">{{$artist->Name}}</a></td>
			</tr>
			@endforeach
		</table>
	</body>
</html>