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
             <div class="input-group">
              <label for="name" class="sr-only">Nombre</label>
              <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-search"></span></div><input type="text" class="form-control" name = "name" placeholder="Nombre" >
            </div>       
          </div>
          <button type="submit" class="btn btn-default">Search</button>
          <a href="{{ route('client.index') }}" class="btn btn-primary" title="All"><span class="glyphicon glyphicon-list"></span></a>
        <a href="{{ route('client.create') }}" class="btn btn-primary" title="new"><span class="glyphicon glyphicon-floppy-save"></span> </a>
        {!! Form::close() !!}
      
           
        
      </div>
    </div>    
      <div class="space"></div>
      <div class="panel panel-default">
        <div class="panel-heading">Clientes</div>
        <div class="panel-body">     
          <div class="table-responsive">
            <table class="table table-condensed table-striped table-bordered table-hover">
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
                        <a class="btn btn-primary btn‐xs" href="{{ route('client.edit',['id' => $client->id] )}}" title="Edit"><span class="glyphicon glyphicon-floppy-open"></span> </a>  
                        <a class="btn btn-danger btn‐xs" href="{{ route('client/destroy',['id' => $client->id] )}}" title="Delete"><span class="glyphicon glyphicon-floppy-remove"></span></a>
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
</div>
@endsection