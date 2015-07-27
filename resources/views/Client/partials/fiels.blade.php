 <div class="form-group">
  {!! Form::label('document', 'Documento') !!}
  {!! Form::number('document', null, ['class' => 'form-control' , 'required' => 'required']) !!}
</div>
<div class="form-group">
  {!! Form::label('document_type', 'Tipo de documento') !!}
  {!! Form::select('document_type', ['' => '--Seleccione--', 'T.I.' => 'Tarjeta de identidad', 'C.C.' => 'Cédula de ciudadanía', 'C.E.' => 'Cédula extránjera'], null, ['class' => 'form-control' , 'required' => 'required'])!!}
</div>
<div class="form-group">
  {!! Form::label('name', 'Nombre') !!}
  {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required'])!!}
</div>
<div class="form-group">
  {!! Form::label('last_name', 'Apellidos') !!}
  {!! Form::text('last_name', null, ['class' => 'form-control' , 'required' => 'required'])!!}
</div>
<div class="form-group">
  {!! Form::label('email', 'Correo') !!}
  {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required'])!!}
</div>
<div class="form-group">
  {!! Form::label('telephone', 'Teléfono') !!}
  {!! Form::number('telephone', null, ['class' => 'form-control' , 'required' => 'required'])!!}
</div>