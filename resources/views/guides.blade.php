@extends('layouts.app')

@section('content')
	<h1>Guides</h1>
	<section>
		<table class="full-width">
			<thead>
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Rating</th>
					<th>Comments</th>
				</tr>
			</thead>
			<tbody>
				@if (count($guides) > 0)
					@foreach ($guides as $guide)
						<tr>
							<td>
								<a href="/guide/{{ $guide->slug }}">{{ $guide->title }}</a>
							</td>
							<td>{{ $guide->author }}</td>
							<td>4 Star</td>
							<td>2 Comments</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</section>
	
	<div class="right">
		{{ $guides->links() }}
	</div>
	<div class="clear"></div>
	
	@if (Auth::check())
		<a href="/guide/create" class="button button-primary">Create Guide</a>
	@endif
	
@endsection