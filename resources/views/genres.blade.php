<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Genres</title>
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
				<th>Genre</th>
			</tr>
			@foreach($genres as $genre)
			<tr>
				<td><a href="/tracks?genre={{$genre->Name}}">{{$genre->Name}}</a></td>
			</tr>
			@endforeach
		</table>
	</body>
</html>