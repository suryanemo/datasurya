<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/blog/public/css/bootstrap.css">
</head>
<body>
	<header>
		@include ('layout.header')
	</header>


	<div class="container-fluid">
		<div class="jumbotron">
		<h1>memodifikasi halaman laravel dengan css bootstrap</h1>
		<ul class="list-group">
		@section('sidebar')
		<li class="list-group-item list-group-item-success">HTML</li>
		<li class="list-group-item list-group-item-warning">CSS</li>
		<li class="list-group-item list-group-item-danger">JS</li>
		
	</ul>
	<p>
				<button class="btn btn-lg btn-primary">Tutorial css</button>
				<button class="btn btn-lg btn-danger">tutorial html</button>
				<button class="btn btn-lg btn-primary">Tutorial Java Script</button>
				
			</p>

	</div>

</body>
</html>