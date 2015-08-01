<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\Todo;

class TodoController extends Controller {
	public function index()
	{
		$data=Todo::all();
		return view('home')->with('data',$data);
	}

	public function create()
	{

	}

	public function store()
	{
		$workName=Input::get('workName');
		$data=array(
            'work'=>$workName,
			'status'=>'Incomplete'
        );
        $response=Todo::create($data);
        if($response)
        {
            return redirect()->back();
        }
	}


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
		//
	}

}
