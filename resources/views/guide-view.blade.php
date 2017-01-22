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
		<form action="/guide/{{$guide->id}}" method="post">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<a href="/guide/{{ $guide->slug }}/edit" class="button button-primary">Edit Guide</a>
			<input type="submit" class="button" value="Delete" />
		</form>
	@endif
	
@endsection