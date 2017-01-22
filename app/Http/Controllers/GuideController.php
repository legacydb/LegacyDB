<?php

namespace App\Http\Controllers;

use App\Guide;
use Auth;
use Validator;
use Illuminate\Http\Request;

class GuideController extends Controller
{
	
	
	public function __construct()
    {
		$this->middleware('auth')->only('show');
	}	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$guides = Guide::orderBy('created_at', 'asc')->paginate(10);
		
		return view('guides', [
			'guides' => $guides
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guide-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
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
		
		return redirect()->action('GuideController@index');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
		
		$guide = Guide::where('slug',$slug)->first();
		
		if(!$guide)
			return redirect()->action('GuideController@index');
			
		$userIsAuthor = (Auth::check() && $guide->author == Auth::user()->name ? true : false);
		
		return view('guide-view',[
			'guide' => $guide,
			'userIsAuthor' =>  $userIsAuthor,
		]);
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
		
		$guide = Guide::where('slug',$slug)->first();
		
		if(!$guide)
			return redirect()->action('GuideController@index');
		
		$userIsAuthor = (Auth::check() && $guide->author == Auth::user()->name ? true : false);
		
		if(!$userIsAuthor)
			return redirect()->action('GuideController@index');
		
		return view('guide-edit',[
			'guide' => $guide,
		]);
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
		$validator = Validator::make($request->all(), [
			'content' => 'required',
		]);
		
		if($validator->fails()){
			return back()
				->withInput()
				->withErrors($validator);
		}
		
		$guide = Guide::findOrFail($id);
		$guide->content = $request->content;
		$guide->save();
		
		return redirect()->action('GuideController@show',['slug' => $guide->slug]);
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
		Guide::findOrFail($id)->delete();
		return redirect()->action('GuideController@index');
		
    }
}
