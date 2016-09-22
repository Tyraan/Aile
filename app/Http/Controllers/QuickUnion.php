<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuickUnion extends Controller {
	private $id;



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
		//

	

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	public function edit()
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
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
		//
	}

	public function QuickUnionUF($num){
		$id = range(0,$num);

	}

	public function Union($p,$q){
		$i = $this->root($p);
		$j = $this->root($q);
		$this->id[$i]=$j;

	}
	public function root($i){
		while($i!=$this ->id[i]){
			$i = $this->id[i];


		}
		
	}

	public function isConnected($i,$j){	

		return $this->id[$i]==$this->id[$j];

	}



}

