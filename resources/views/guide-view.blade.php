@extends('layouts.app')

@section('content')
	<h1 class="post-title">{{ $guide->title }}</h1>
	<p class="post-author">by {{ $guide->author }}</p>
	<hr/>
	<div class="content">
		@markdown($guide->content)
	</div>
	<hr/>
	@if($userIsAuthor)
		<a href="/guide/edit/{{ $guide->id }}" class="button button-primary">Edit Guide</a>
		<a href="/guide/delete/{{ $guide->id }}" class="button">Delete</a>
	@endif
	
@endsection