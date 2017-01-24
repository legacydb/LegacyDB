@extends('layouts.app')

@section('content')
	<h1 class="post-title">{{ $item->name }}</h1>
	<hr/>
	<div class="grid content">
		<div class="one columns">
			<img src="/images/icons/large/{{ $item->icon }}.png" class="item-icon" />
		</div>
		<div class="four columns">
			<span class="item-{{ $item->quality }} item-name">{{ $item->name }}</span><br/>
			@if($item->binds)
				<span>{{ $item->binds }}</span><br/>
			@endif
			@if($item->type || $item->slot)
				<div class="grid">
					@if($item->type)
						<div class="six columns">
							<span>{{ $item->type }}</span>
						</div>
					@endif
					@if($item->slot)
						<div class="six columns align-right">
							<span>{{ $item->slot }}</span>
						</div>
					@endif
				</div>
			@endif
			@if($item->dmg_min || $item->speed != '0.00')
				<div class="grid">
					@if($item->dmg_min1 && $item->dmg_max1)
						<div class="six columns">
							<span>{{ $item->dmg_min1 }} - {{ $item->dmg_max1 }} damage</span>
						</div>
					@endif
					@if($item->speed)
						<div class="six columns align-right">
							<span>Speed {{ $item->speed }}</span>
						</div>
					@endif
				</div>
			@endif
			@if($item->dps > 0)
				<div>({{ round($item->dps,1) }} damage per second)</div>
			@endif
			@if($item->durability)
				<div>Durability {{ $item->durability }} / {{ $item->durability }}</div>
			@endif
			@if($item->reqlevel > 0)
				<div>Requires level {{ $item->reqlevel }}</div>
			@endif
			@if($item->spell_trigger1)
				<div class="item-spell">{{ $item->spell_trigger1 }}:</div>
			@endif
		</div>
	</div>
@endsection