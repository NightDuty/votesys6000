@extends('app')

@section('content')
	<form method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>Login Code</label>
	<input type="text" name="usernumber" value="{{ old('usernumber') }}">

	<label>Password</label>
	<input type="password" name="password">
	<button type="submit">Login</button>
	</form>
@endsection
