<?php namespace EjemploCRUD\Http\Controllers;

use EjemploCRUD\Http\Requests\CreateClientRequest;
use EjemploCRUD\Http\Controllers\Controller;
use EjemploCRUD\Models\Client as Client;
use Illuminate\Http\Request;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::paginate(5);
		return \View::make('Client/list',compact('clients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Client/new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateClientRequest $request)
	{
		$client = new Client;
		$client->create($request->all());
		return redirect('client');
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
		$client = Client::find($id);
        return \View::make('Client\update',compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$rules =array (
			'document' => 'required|numeric', 
			'document_type' => 'required', 
			'name' => 'required', 
			'last_name' => 'required',
			'email' => 'required',
			'telephone' => 'required|numeric',
		);

		$this->validate($request, $rules);

		$client = Client::find($request->id);
		$client->document = $request->document;
		$client->document_type = $request->document_type;
        $client->name = $request->name;
        $client->last_name = $request->last_name;
        $client->telephone = $request->telephone;
		$client->save();
        return redirect('client');
	}

	public function searchName(CreateClientRequest $request){
         $clients = Client::where('name','like','%'.$request->name.'%')->get();
         return \View::make('Client\list', compact('clients'));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$client = Client::find($id);
        $client->delete();
        return redirect()->back();
	}

}
