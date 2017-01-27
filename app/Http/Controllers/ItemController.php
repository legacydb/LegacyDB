<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	
	public function items(Request $request){
		
		echo '<pre>';
		echo print_r($request->all());
		echo '</pre>';
		
		$items = Item::orderBy('id', 'asc')->paginate(100);
		
		return view('items', [
			'items' => $items
		]);
		
	}
	
	public function item($slug){
		
		$item = Item::where('slug',$slug)->first();
		
		if(!$item){
			abort(404);
		}
		
		return view('item-view',[
			'item' => $item,
		]);
		
	}
	
}
