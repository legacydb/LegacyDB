<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	
	public static function filter(Request $request, Item $items){
		
		if($request->has('quality')){
			$items = $items->where('quality',$request->quality);
		}
		
		return $items->paginate(100);
		
	}
	
	public function items(Request $request){
		
		$items = new Item;
		$items = static::filter($request, $items);
		
		return view('items', [
			'items' => $items
		]);
		
	}
	
	public function item($slug){
		
		$item = Item::where('slug',$slug)->first();
		
		if(!$item){
			abort(404);
		}
		
		$item->allowed_class = $item->formatAllowedClasses();
		
		return view('item-view',[
			'item' => $item,
		]);
		
	}
	
}
