<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>

	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		td,th{
			border: 1px solid;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Cart</th>
			<th>Date</th>
		</tr>
		@foreach($orders as $order)
		<tr>
			<td>{{$order->name}}</td>
			<td>{{$order->address}}</td>
			<td>{{$order->cart}}</td>
			<td>{{$order->created_at}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>