@extends('app')
@section('content')
<div class="container">
    <div class="row">
     	 @if(Session::has('message'))
		<p class="alert alert-success">{{ Session::get('message')}}</p>
	 @endif
    <div class="panel panel-default">
      <div class="panel-heading">Gestionar clientes</div>
      <div class="panel-body">  
         {!! Form::open(['method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" class="form-control" name = "name" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        {!! Form::close() !!}
      
        <div class="space"></div>        
        <a href="{{ route('client.index') }}" class="btn btn-primary ">All</a>
        <a href="{{ route('client.create') }}" class="btn btn-primary ">New</a>
      </div>
    </div>    
      <div class="space"></div>
      <div class="panel panel-default">
        <div class="panel-heading">Clientes</div>
        <div class="panel-body">     
          <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Documento</th>
                  <th>Tipo de documento</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Acción</th>    
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->document }}</td>
                    <td>{{ $client->document_type }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>
                        <a class="btn btn-primary btn‐xs" href="{{ route('client.edit',['id' => $client->id] )}}" >Edit</a>  
                        <a class="btn btn-danger btn‐xs" href="{{ route('client/destroy',['id' => $client->id] )}}" >Delete</a>
                    </td>  
                </tr>
                @endforeach
            </tbody>
          </table>
          {!!$clients->render()!!}
        </div>
    </div>
  </div>
</div>
@endsection