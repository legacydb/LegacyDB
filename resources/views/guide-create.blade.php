@extends('layouts.app')

@section('content')
	
	
	<div class="Errors">
		 @include('common.errors')
	</div>
	
	<h2>Create Guide</h2>
	<br/>
	<form action="/guide/add" method="post">
		{{ csrf_field() }}
		<section>
			<div class="form-row">
				<label>Title</label>
				<input type="text" name="title" />
			</div>
		</section>
		<button class="button" type="submit">Save Guide</button>
	</form>
	
@endsection