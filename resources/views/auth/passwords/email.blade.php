@extends('layouts.app')

@section('content')

<h2>Reset Password</h2>

@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
@endif

<div class="row">
	<div class="five columns">
		<form role="form" method="POST" action="{{ url('/password/email') }}">
			{{ csrf_field() }}

			<div class="{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email">E-Mail Address</label>
				<input id="email" type="email" name="email" value="{{ old('email') }}" required>
				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
			<button type="submit" class="button-primary">Send Password Reset Link</button>
		</form>
	</div>
	<div class="clear"></div>
</div>

@endsection
