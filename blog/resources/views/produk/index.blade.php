<html>
<head>
	<title>laravel saya</title>
</head>
<body>
	<h1> data produk</h1>
	<table border="1">
		<thead>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>kategori</th>
			<th>Qty</th>
			<th>harga beli</th>
			<th>harga jual</th>
		</tr>
		</thead>
		<tbody>
			@foreach ($produk as $i=> $p)
			<tr>
				<td>{{ $i+1 }}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->kategori }}</td>
				<td>{{ $p->qty }}</td>
				<td>{{ $p->harga_beli }}</td>
				<td>{{ $p->harga_jual }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>