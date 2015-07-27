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
        {!! Form::open(['method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
             <div class="input-group">
              <label for="name" class="sr-only">Nombre</label>
              <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-search"></span></div><input type="text" class="form-control" name = "name" placeholder="Nombre" >
            </div>       
          </div>
          <button type="submit" class="btn btn-default">Search</button>
           <a href="{{ route('movie.index') }}" class="btn btn-primary" title="All"><span class="glyphicon glyphicon-list"></span></a>
        <a href="{{ route('movie.create') }}" class="btn btn-primary" title="new"><span class="glyphicon glyphicon-floppy-save"></span> </a>
        {!! Form::close() !!}
              
       
      </div>
    </div>
          <div class="space"></div>
    <div class="panel panel-default">
      <div class="panel-heading">Películas</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-condensed table-striped table-bordered table-hover">
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
                        <a class="btn btn-primary btn‐xs" href="{{ route('movie.edit',['id' => $movie->id] )}}" title="Edit"><span class="glyphicon glyphicon-floppy-open"></span> </a>  
                        <a class="btn btn-danger btn‐xs" href="{{ route('movie/destroy',['id' => $movie->id] )}}" title="Delete"><span class="glyphicon glyphicon-floppy-remove"></span></a>
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
</div>
@endsection