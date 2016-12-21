@extends('layouts.app')

@section('content')
	
	
	<div class="Errors">
		 @include('common.errors')
	</div>
	
	<h2>{{ $guide->title }} </h2>
	<br/>
	<p>by {{ $guide->author }}</p>
	<br/>
	<p>{{ $guide->content }}</p>
	
	
@endsection