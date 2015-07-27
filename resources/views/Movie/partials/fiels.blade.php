<div class="form-group">
    <div class="input-group">
  		{!! Form::label('name', 'Nombre', ['class' => 'sr-only']) !!}
  		<div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-font"></span></div>{!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre', 'title' => 'Nombre' ]) !!}
	</div>
</div>
<div class="form-group">
	<div class="input-group">
  		{!! Form::label('description', 'Descripción', ['class' => 'sr-only']) !!}
  		<div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-font"></span></div>{!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Descripción', 'title' => 'Descripción' ])!!}
	</div>
</div>
<div class="form-group">
  <div class="input-group">
  	{!! Form::label('date', 'Fecha', ['class' => 'sr-only']) !!}
  	<div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-calendar"></span></div>{!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Fecha', 'title' => 'Fecha' ])!!}
  </div>
</div>