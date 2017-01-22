<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	
	public function items(){
		
		$items = Item::orderBy('id', 'asc')->paginate(100);
		
		return view('items', [
			'items' => $items
		]);
		
	}
	
	public function item($slug){
		
		$item = Item::where('slug',$slug)->first();
		
		if(!$item){
			return redirect('/items');
		}
		
		return view('item-view',[
			'item' => $item,
		]);
		
	}
	
}
