<!DOCTYPE html>
<html>
<head>
	<title>CONTROL SETRUKTUR PADA BLADE TEMPLATE </title>
</head>
<body>
	@if (count($produk)==1)
	<p>jumlah produk adalah satu</p>
	@elseif(count($produk)>1)
	<p><b>perulangan dengan for</b></p>
	@for ($i = 0; $i < count($produk); $i++)
	<p>{{ 'no : ' .$i. ' nama produk : ' .$produk[$i] }}</p>
	@endfor
	<hr>
	<p><b>perulangan dengan foreach</b></p>
	@foreach ($produk as $x => $v)
	<p>{{ 'no : ' .$x. ' nama produk : ' .$v }}</p>
	@endforeach
	<hr>
	<p><b>perulangan dengan while</b></p>
	@php
	$no = 1;
	@endphp
	@while ($no<=5)
	<p>ini adalah perulangan ke {{ $no }}</p>
	@php
	$no++;
	@endphp
	@endwhile
	@else
	<p>tidak ada data produk</p>
	@endif


</body>
</html>