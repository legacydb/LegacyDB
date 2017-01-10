@extends('layouts.app')
@section('content')
	<h1>Items</h1>
	<section>
		<table class="full-width">
			<thead>
				<tr>
					<th>Title</th>
					<th>Quality</th>
					<th>Type</th>
					<th>Slot</th>
					<th>Item Level</th>
					<th>DPS</th>
					<th>Armor</th>
				</tr>
			</thead>
			<tbody>
				@if (count($items) > 0)
					@foreach ($items as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>{{ $item->quality }}</td>
							<td>{{ $item->type }}</td>
							<td>{{ $item->slot }}</td>
							<td>{{ $item->itemlevel }}</td>
							<td>{{ $item->dps }}</td>
							<td>{{ $item->armor }}</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</section>
	
	<div class="right">
		{{ $items->links() }}
	</div>
	<div class="clear"></div>	
	
@endsection