<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Guide;
use Illuminate\Http\Request;

Route::get('/', function () {
	
	$guides = Guide::orderBy('created_at', 'asc')->get();
	
    return view('guides', [
		'guides' => $guides
	]);
	
});

Route::post('/guide',function (Request $request) {
	
	$validator = Validator::make($request->all(), [
		'title' => 'required|max:255',
	]);
	
	if($validator->fails()){
		
		return redirect('/')
			->withInput()
			->withErrors($validator);
			
	}
	
	$guide = new Guide;
	$guide->title = $request->title;
	$guide->save();
	
	return redirect('/');
	
});

Route::delete('/guide/{id}', function ($id) {
	
	Guide::findOrFail($id)->delete();
	
	return redirect('/');
	
});