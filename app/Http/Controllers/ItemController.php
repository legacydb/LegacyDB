<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
	
	public static function getSlots(){
		
		$results = DB::table('items')->select('slot')->distinct()->get();
		
		foreach($results as $result){
			if($result->slot){
				$array[] = $result->slot;
			}
		}
		return $array;
	}
	
	public static function getTypes(){
		
		$results = DB::table('items')->select('type')->distinct()->get();
		
		foreach($results as $result){
			if($result->type){
				$array[] = $result->type;
			}
		}
		return $array;
	}	
	
	public static function filter(Request $request, Item $items){
		
		if($request->has('search')){
			$items = $items->where('name','like','%'.$request->search.'%');
		}
		
		if($request->has('quality')){
			$items = $items->where('quality',$request->quality);
		}
		
		if($request->has('slot')){
			$items = $items->where('slot',$request->slot);
		}		
		
		if($request->has('type')){
			$items = $items->where('type',$request->type);
		}
		
		return $items->paginate(100);
		
	}
	
	public function items(Request $request){
		
		$items = new Item;
		$items = static::filter($request, $items);
		
		$searchOptions['quality'] = array('Poor','Common','Uncommon','Rare','Epic','Legendary','Artifact');
		$searchOptions['slots'] = static::getSlots(); 
		$searchOptions['types'] = static::getTypes(); 
		
		return view('items', [
			'items' => $items,
			'request' => $request,
			'searchOptions' => $searchOptions
		]);
		
	}
	
	public function item($slug){
		
		$item = Item::where('slug',$slug)->first();
		
		if(!$item){
			abort(404);
		}
		
		$item->allowed_class = $item->formatAllowedClasses();
		$item->buyprice = $item->formatPrice($item->buyprice);
		$item->sellprice = $item->formatPrice($item->sellprice);
		
		return view('item-view',[
			'item' => $item,
		]);
		
	}
	
}
