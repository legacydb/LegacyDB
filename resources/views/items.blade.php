@extends('layouts.app')
@section('content')
	<h1>Items</h1>
	<section>
		<table class="full-width">
			<thead>
				<tr>
					<th></th>
					<th>Title</th>
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
							<td><img src="/images/icons/medium/{{ $item->icon }}.png" /></td>
							<td><a class="item-{{ $item->quality }}" href="/item/{{ $item->slug }}">{{ $item->name }}</a></td>
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