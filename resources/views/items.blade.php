@extends('layouts.app')
@section('content')
	<h1>Items</h1>
	<form method="get">
		<div class="grid">
			<div class="three columns">
				<label>Search</label>
				<input type="text" name="search" value="{{ $request->search }}" />
			</div>
			<div class="two columns">
				<label>Quality</label>
				<select name="quality">
					<option value>Any</option>
					@foreach ($searchOptions['quality'] as $quality)
						<option {{ $request->quality == $quality ? 'selected' : '' }} value="{{ $quality }}">{{ $quality }}</option>
					@endforeach
				</select>
			</div>
			<div class="two columns">
				<label>Slot</label>
				<select name="slot">
					<option value>Any</option>
					@foreach ($searchOptions['slots'] as $slot)
						<option {{ $request->slot == $slot ? 'selected' : '' }} value="{{ $slot }}">{{ $slot }}</option>
					@endforeach
				</select>
			</div>
			<div class="two columns">
				<label>Type</label>
				<select name="type">
					<option value>Any</option>
					@foreach ($searchOptions['types'] as $type)
						<option {{ $request->type == $type ? 'selected' : '' }} value="{{ $type }}">{{ $type }}</option>
					@endforeach
				</select>
			</div>				
			<div class="two columns">
				<label>&nbsp;</label>
				<input type="submit" value="Search" class="button-primary" />
			</div>
		</div>
	</form>
	<section>
		<table class="full-width">
			<thead>
				<tr>
					<th></th>
					<th>Title</th>
					<th>Slot</th>					
					<th>Type</th>
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
							<td>{{ $item->slot }}</td>
							<td>{{ $item->type }}</td>
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