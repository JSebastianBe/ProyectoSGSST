<?php namespace EjemploCRUD\Http\Controllers;

use EjemploCRUD\Http\Requests\CreateMovieRequest;
use EjemploCRUD\Http\Controllers\Controller;
use EjemploCRUD\Models\Movie as Movie;
use Illuminate\Http\Request;
use Illuminate\Routhing\Redirector;
use Illuminate\Support\Facades\Validator as Validator;
use Illuminate\Support\Facades\Session;



class MovieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::paginate(5);  
   		return \View::make('Movie\list',compact('movies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('Movie\new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMovieRequest $request)
	{
		$movie = new Movie;
		$movie->create($request->all());
    	return redirect('movie');
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
		$movie = Movie::find($id);
        return \View::make('Movie\update',compact('movie'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateMovieRequest $request)
	{
		$movie = Movie::find($request->id);
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->date = $request->date;
		$movie->save();
        return redirect('movie');
	}

	public function searchName(CreateMovieRequest $request){
         $movies = Movie::where('name','like','%'.$request->name.'%')->get();
         return \View::make('Movie\list', compact('movies'));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$movie = Movie::find($id);
        $movie->delete();
        return redirect()->back();
	}

}
