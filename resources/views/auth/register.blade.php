@extends('layouts.app')

@section('content')

<h1>Register</h1>
@include('common.errors')
<div class="row">
	<div class="five columns">
		<form role="form" method="POST" action="{{ url('/register') }}">
			{{ csrf_field() }}
			<section>
				<label for="name">Username</label>
				<input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
				<label for="email">E-Mail Address</label>
				<input id="email" type="email" name="email" value="{{ old('email') }}" required>
				<label for="password">Password</label>
				<input id="password" type="password" name="password" required>
				<label for="password-confirm">Confirm Password</label>
				<input id="password-confirm" type="password" name="password_confirmation" required>
			</section>
			<button type="submit" class="button-primary">Register</button>
		</form>
	</div>
	<div class="clear"></div>
</div>
@endsection
