@extends('layouts.app')

@section('content')

	<h1 class="post-title">{{ $guide->title }}</h1>
	<p class="post-author">by {{ $guide->author }}</p>
	@if($userIsAuthor)
		<small>(<a href="/guide/edit/{{ $guide->id }}">edit</a>)</small>
	@endif
	
	<hr/>
	<div class="content">
		@markdown($guide->content)
	</div>
	
@endsection