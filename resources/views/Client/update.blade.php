@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Editar cliente: {{$client->name}}</div>
        <div class="panel-body">
         @include('client.partials.messages')
               {!! Form::model($client,['route' => 'client.update', 'method' => 'put', 'novalidate']) !!}
                 {!! Form::hidden('id', $client->id) !!}
                 @include('Client.partials.fiels')     
                  <div class="form-group">
                        {!! Form::submit('Enviar', ['class' => 'btn btn-success' ] ) !!}
                    </div>
              {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection