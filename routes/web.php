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
	
	return view('home');
	
});

Route::get('/guides', function () {
	
	$guides = Guide::orderBy('created_at', 'asc')->get();
	
    return view('guides', [
		'guides' => $guides
	]);
	
});

Route::get('/guide/create', function () {
	
    return view('guide-create');
	
});

Route::post('/guide/add',function (Request $request) {
	
	$validator = Validator::make($request->all(), [
		'title' => 'required|max:255|unique:guides',
		'content' => 'required',
	]);
	
	if($validator->fails()){
		
		return redirect('/guide/create')
			->withInput()
			->withErrors($validator);
			
	}
	
	$guide = new Guide;
	$guide->title = $request->title;
	$guide->slug = str_slug($request->title,'-');
	$guide->author = 'username';
	$guide->content = $request->content;
	$guide->save();
	
	return redirect('/guides');
	
});

Route::get('/guide/{slug}', function ($slug) {
	
	$guide = Guide::where('slug',$slug)->first();
	
    return view('guide-view',[
		'guide' => $guide
	]);
	
});

Route::delete('/guide/{id}', function ($id) {
	
	Guide::findOrFail($id)->delete();
	
	return redirect('/guides');
	
});