@extends('layouts.app')

@section('content')
	
	<h1>Edit Guide</h1>
	@include('common.errors')
	<form action="/guide/{{$guide->id}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		<div class="row">
			<div class="five columns">
				<label>Title</label>
				<input type="text" name="title" value="{{$guide->title}}" disabled />
			</div>
			<div class="clear"></div>
		</div>
		<div class="form-row">
			<label>Content</label>
			<textarea name="content" rows="10">{{$guide->content}}</textarea>
			<small class="right"><a href="#">Formatting help</a></small>
		</div>
		<button class="button-primary" type="submit">Save Guide</button>
	</form>
	
@endsection