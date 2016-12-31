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
	
	return view('homepage');
	
});

// Guides
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
	
	$user = Auth::user();
	
	$guide = new Guide;
	$guide->title = $request->title;
	$guide->slug = str_slug($request->title,'-');
	$guide->author = $user->name;
	$guide->content = $request->content;
	$guide->save();
	
	return redirect('/guides');
	
});

Route::post('/guide/update',function (Request $request) {
	
	$validator = Validator::make($request->all(), [
		'content' => 'required',
	]);
	
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}
	
	$guide = Guide::findOrFail($request->id);
	$guide->content = $request->content;
	$guide->save();
	
	return redirect()->route('guide.view', ['slug' => $guide->slug]);
	
});

Route::get('/guide/{slug}', ['as' => 'guide.view', function($slug){
	
	$guide = Guide::where('slug',$slug)->first();
	
	if(!$guide)
		return redirect('/guides');
	
	$userIsAuthor = (Auth::check() && $guide->author == Auth::user()->name ? true : false);
	
    return view('guide-view',[
		'guide' => $guide,
		'userIsAuthor' =>  $userIsAuthor,
	]);	
	
}]);

Route::get('/guide/edit/{id}', function ($id) {
	
	$guide = Guide::where('id',$id)->first();
	
	if(!$guide)
		return redirect('/guides');
	
	$userIsAuthor = (Auth::check() && $guide->author == Auth::user()->name ? true : false);
	
	if(!$userIsAuthor)
		return redirect('/guides');
	
	return view('guide-edit',[
		'guide' => $guide,
	]);
	
});

Route::delete('/guide/delete/{id}', function ($id) {
	
	Guide::findOrFail($id)->delete();
	
	return redirect('/guides');
	
});

Auth::routes();

Route::get('/my-account', 'HomeController@index');
