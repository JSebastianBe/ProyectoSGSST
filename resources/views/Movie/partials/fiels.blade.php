<div class="form-group">
  {!! Form::label('name', 'Nombre') !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required' ]) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Descripción') !!}
  {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required' ])!!}
</div>
<div class="form-group">
  {!! Form::label('date', 'Fecha') !!}
  {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required' ])!!}
</div>