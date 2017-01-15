@extends('layouts.app')

@section('content')
	<h1 class="post-title">{{ $item->name }}</h1>
	<hr/>
	<div class="content">
		<div class="one columns">
			<img src="/images/icons/large/{{ $item->icon }}.png" />
		</div>
		<div class="four columns">
			<span class="item-{{ $item->quality }}">{{ $item->name }}</span><br/>
			<span>{{ $item->type }}</span><br/>
			<span>{{ $item->slot }}</span>
		</div>
		<div class="clear"></div>
	</div>
@endsection