@extends('app')

@section('content')
<div class="container">
    <div class="row">
      @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message')}}</p>
      @endif
    <div class="panel panel-default">
      <div class="panel-heading">Gestionar películas</div>
      <div class="panel-body">  
         {!! Form::open(['route' => 'movie/searchName', 'method' => 'post', 'validate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" class="form-control" name = "name" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        {!! Form::close() !!}
      
        <div class="space"></div>        
          <a href="{{ route('movie.index') }}" class="btn btn-primary ">All</a>
          <a href="{{ route('movie.create') }}" class="btn btn-primary ">Create</a>
      </div>
    </div>
          <div class="space"></div>
    <div class="panel panel-default">
      <div class="panel-heading">Películas</div>
      <div class="panel-body">  
        <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Fecha</th>
                  <th>Acción</th>    
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>
                        <a class="btn btn-primary btn‐xs" href="{{ route('movie.edit',['id' => $movie->id] )}}" >Edit</a>  
                        <a class="btn btn-danger btn‐xs" href="{{ route('movie/destroy',['id' => $movie->id] )}}" >Delete</a>
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
        {!!$movies->render()!!}
      </div>
    </div>
  </div>
</div>
@endsection