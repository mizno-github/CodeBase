<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CodeBase</title>

	<!--Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--Font Awesome5-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="menu-bar">
	<div class="menu-content col-10 mx-auto d-flex justify-content-between rounded">
		<h1 class="d-inline my-auto display-3"><a href="/">CodeBase</a></h1>

		<ul class="list-unstyled my-4 d-inline d-flex bg-white createBar">
			<li class="p-1"><a class="btn btn-success btn-lg" href="{{route('article.create') }}">コラム</a></li>
			<li class="p-1"><a class="btn btn-success btn-lg" href="{{route('errorCode.create') }}">エラーコード</a></li>
			<li class="p-1"><a class="btn btn-success btn-lg" href="{{route('errorCode.create') }}">チートシート</a></li>
		</ul>
	</div>
</div>
<div class="wrapper col-10 mx-auto">
@yield('CodeBase')
</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</body>
</html>
