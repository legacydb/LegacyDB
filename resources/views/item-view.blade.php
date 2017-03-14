@extends('layouts.app')

@section('content')
	<h1 class="post-title">{{ $item->name }}</h1>
	<hr/>
	<div class="grid content">
		<section>
			<div class="item-tooltip">
				<div class="item-icon">@if($item->stacks > 1) <span class="item-stacks">{{ $item->stacks }}</span> @endif<img src="/images/icons/large/{{ $item->icon }}.png" /></div>
				<div class="item-content">
					<span class="item-{{ $item->quality }} item-name">{{ $item->name }}</span><br/>
					@if($item->binds)
						<span>{{ $item->binds }}</span><br/>
					@endif
					@if($item->maxcount == 1)
						<div>Unique</div>
					@endif
					@if($item->required_skill)
						<div>Requires {{ $item->required_skill }} ({{ $item->required_skill_rank }})</div>
					@endif
					@if($item->required_spell)
						<div>Requires {{ $item->required_spell }}</div>
					@endif				
					@if($item->required_reputation_faction)
						<div class="item-required-faction">Requires {{ $item->required_reputation_faction }} - {{ $item->required_reputation_value }}</div>
					@endif
					@if($item->type || $item->slot)
						<div class="grid">
							@if($item->slot)
								<div class="six columns">
									<span>{{ $item->slot }}</span>
								</div>
							@endif
							@if($item->type)
								<div class="six columns {{ isset($item->slot) ? 'align-right' : '' }}">
									<span>{{ $item->slots > 0 ? $item->slots . ' Slot ' : '' }}{{ $item->type }}</span>
								</div>
							@endif
						</div>
					@endif
					@if($item->dmg_min1 || $item->speed != '0.00')
						<div class="grid">
							@if($item->dmg_min1 && $item->dmg_max1)
								<div class="eight columns">
									<span>{{ $item->dmg_min1 }} - {{ $item->dmg_max1 }} {{ $item->dmg_type1 }} damage</span>
								</div>
							@endif
							@if($item->speed)
								<div class="four columns align-right">
									<span>Speed {{ $item->speed }}</span>
								</div>
							@endif
						</div>
					@endif
					@for($i=2; $i<=5; $i++)
						@if($item['dmg_min' . $i])
							<div>+{{ $item['dmg_min' . $i] }} - {{ $item['dmg_max' . $i] }} {{ $item['dmg_type' . $i] }} damage</div>
						@endif
					@endfor
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
					@if($item->holy_res)
						<div>+{{ $item->holy_res }} Holy Resistance</div>
					@endif				
					@if($item->fire_res)
						<div>+{{ $item->fire_res }} Fire Resistance</div>
					@endif
					@if($item->nature_res)
						<div>+{{ $item->nature_res }} Nature Resistance</div>
					@endif
					@if($item->frost_res)
						<div>+{{ $item->frost_res }} Frost Resistance</div>
					@endif
					@if($item->shadow_res)
						<div>+{{ $item->shadow_res }} Shadow Resistance</div>
					@endif
					@if($item->arcane_res)
						<div>+{{ $item->arcane_res }} Arcane Resistance</div>
					@endif
					@if($item->durability)
						<div>Durability {{ $item->durability }} / {{ $item->durability }}</div>
					@endif
					@if($item->allowed_class)
						<div>Classes: {!! $item->allowed_class !!}</div>
					@endif
					@if($item->reqlevel > 1)
						<div>Requires Level {{ $item->reqlevel }}</div>
					@endif
					@if($item->randomproperty)
						<div class="item-spell">Random Bonuses</div>
					@endif
					@for($i=1; $i<=5; $i++)
						@if($item['spell_trigger' . $i])
							<div class="item-spell">{{ $item['spell_trigger' . $i] }}: {{ $item['spell_text' . $i] }}</div>
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
			<div class="item-info">
				<h5 class="no-margin">Item info</h5>
				<hr/>
				<div>Item level: {{ $item->itemlevel }}</div>
				@if($item->buyprice)
					<div>Buy price: {!! $item->buyprice !!}</div>
				@endif
				@if($item->sellprice)
					<div>Sell price: {!! $item->sellprice !!}</div>
				@endif
				<div>Entry: <a href="http://db.vanillagaming.org/?item={{ $item->entry }}" target="_blank">{{ $item->entry }}</a></div>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
@endsection