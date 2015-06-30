<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voting System 6000</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="content">
		<h1>Voting System 6000</h1>
		@if (count($errors) > 0)
			@foreach ($errors as $error)
				<strong>{{ $error }}</strong>
			@endforeach
		@endif
		@yield('content')
	</div>
</body>
</html>
