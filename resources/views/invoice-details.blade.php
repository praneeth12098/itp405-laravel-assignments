<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Invoices</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<table class="table">
			<tr>
				<th>Song</th>
				<th>Quantity</th>
				<th >Unit Price</th>
			</tr>
			@foreach($invoiceItems as $invoiceItem)
			<tr>
				<td>{{$invoiceItem->trackName}} by {{$invoiceItem->artistName}}</td>
				<td>{{$invoiceItem->Quantity}}</td>
				<td>{{$invoiceItem->UnitPrice}}</td>
			</tr>
			@endforeach
		</table>
	</body>
</html>