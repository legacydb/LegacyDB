@extends('layouts.app')

@section('content')

<h1>Login</h1>
@include('common.errors')
<form role="form" method="POST" action="{{ url('/login') }}">
	{{ csrf_field() }}
	<section>
		<div class="five columns">
			<label for="usernme">Username</label>
			<input id="username" type="text" name="name" value="{{ old('username') }}">
			<label for="password" class="col-md-4 control-label">Password</label>
			<input id="password" type="password" name="password" required>
			<label><input type="checkbox" name="remember"> Remember Me</label>
		</div>
		<div class="clear"></div>
	</section>
	<button type="submit" class="button-primary">Login</button>
	<a class="button" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
</form>

@endsection
