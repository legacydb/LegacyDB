@extends('layouts.app')
@section('content')
	<h1>Items</h1>
	<form method="get">
		<div class="grid">
			<div class="four columns">
				<label>Search</label>
				<input type="text" name="search" value="{{ $request->search }}" />
			</div>
			<div class="two columns">
				<label>Quality</label>
				<select name="quality">
					<option value>Any</option>
					<option {{ $request->quality == 'poor' ? 'selected' : '' }} value="poor">Poor</option>
					<option {{ $request->quality == 'common' ? 'selected' : '' }} value="common">Common</option>
					<option {{ $request->quality == 'uncommon' ? 'selected' : '' }} value="uncommon">Uncommon</option>
					<option {{ $request->quality == 'rare' ? 'selected' : '' }} value="rare">Rare</option>
					<option {{ $request->quality == 'epic' ? 'selected' : '' }} value="epic">Epic</option>
					<option {{ $request->quality == 'legendary' ? 'selected' : '' }} value="legendary">Legendary</option>
					<option {{ $request->quality == 'artifact' ? 'selected' : '' }} value="artifact">Artifact</option>
				</select>
			</div>
			<div class="two columns">
				<label>&nbsp;</label>
				<input type="submit" value="Search" />
			</div>
		</div>
	</form>
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