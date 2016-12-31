@extends('layouts.app')

@section('content')
	
	<h1>Edit Guide</h1>
	@include('common.errors')
	<form action="/guide/update" method="post">
		{{ csrf_field() }}
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
		<input type="hidden" name="id" value="{{$guide->id}}" />
		<button class="button-primary" type="submit">Save Guide</button>
	</form>
	
@endsection