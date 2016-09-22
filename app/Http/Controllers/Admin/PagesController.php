<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Input;

use Redirect,Input,Auth;


class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->validate($request, [
				'title'=>'require|unique:pages|max:255',
				'body' =>'required'
		]);
		
		$page = new Page;
		$page->title = Input::get('title');
		$page->body = Input::get('body');
		$page->user_id = 1;//Auth::user()->id;
		if($page->save()){
			return Redirect::to('admin');
		}else{
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$page = Page::find($id);
		$page->delete();
		
		return Redirect::to('admin');
	}

}
