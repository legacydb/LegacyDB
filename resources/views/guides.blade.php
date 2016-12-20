@extends('layouts.app')

@section('content')
	
	
	<div class="Errors">
		 @include('common.errors')
	</div>
	
	<h2>Guides</h2>
	<br/>
	<section>
		<table>
			<tbody>
				@if (count($guides) > 0)
					@foreach ($guides as $guide)
						<tr>
							<td>
								<div>{{ $guide->title }}</div>
							</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</section>
	<a href="/guide/create" class="button">Create Guide</a>
	
@endsection