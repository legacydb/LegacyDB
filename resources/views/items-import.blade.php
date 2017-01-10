@extends('layouts.app')
@section('content')
	<h1>Import items</h1>
	<section>
		<table class="full-width">
			<thead>
				<tr>
				
				</tr>
			</thead>
			<tbody>
				@if (count($items) > 0)
					@foreach ($items as $item)
						<tr>
							<td>
								{{ $item->name }}
							</td>
							<td>
								{{ $item->quality }}
							</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</section>
@endsection