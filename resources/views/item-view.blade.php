@extends('layouts.app')

@section('content')
	<h1 class="post-title">{{ $item->name }}</h1>
	<hr/>
	<div class="content">
		
		<div class="grid item-info">
			<img src="/images/icons/large/{{ $item->icon }}.png" class="item-icon" />
			<div class="item-content">
				<span class="item-{{ $item->quality }} item-name">{{ $item->name }}</span><br/>
				@if($item->binds)
					<span>{{ $item->binds }}</span><br/>
				@endif
				@if($item->maxcount == 1)
					<div>Unique</div>
				@endif
				@if($item->type || $item->slot)
					<div class="grid">
						@if($item->slot)
							<div class="six columns">
								<span>{{ $item->slot }}</span>
							</div>
						@endif
						@if($item->type)
							<div class="six columns align-right">
								<span>{{ $item->type }}</span>
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
				@if($item->armor)
					<div>{{ $item->armor }} Armor</div>
				@endif
				@for($i=1; $i<=10; $i++)
					@if($item['stat_type' . $i])
						<div>@if($item['stat_value' . $i] > 0)+@endif{{ $item['stat_value' . $i] }} {{ $item['stat_type' . $i] }}</div>
					@endif
				@endfor
				@if($item->durability)
					<div>Durability {{ $item->durability }} / {{ $item->durability }}</div>
				@endif
				@if($item->reqlevel > 0)
					<div>Requires Level {{ $item->reqlevel }}</div>
				@endif
				@if($item->randomproperty)
					<div class="item-spell">Random Bonuses</div>
				@endif
				@for($i=1; $i<=5; $i++)
					@if($item['spell_trigger' . $i])
						<div class="item-spell">{{ $item['spell_trigger' . $i] }}: {{ $item['spell_id' . $i] }}</div>
					@endif
				@endfor
				@if($item->description)
					<div class="item-description">"{{ $item->description }}"</div>
				@endif
				@if($item->pagetext == 1)
					<div class="item-spell">{{ "<Click to Read>" }}</div>
				@endif
			</div>
		</div>
	</div>
@endsection