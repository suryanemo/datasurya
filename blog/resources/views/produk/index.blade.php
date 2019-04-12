<html>
<head>
	<title></title>
</head>
<body>
	<h1> data produk</h1>
	<table border="1">
		<thead>
			<tr>NO</tr>
			<tr>Nama Produk</tr>
		</thead>
		<tbody>
			@foreach ($produk as $i=> $v)
			<tr>
				<td>{{ $i+1 }}</td>
				<td>{{ $v }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>