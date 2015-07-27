 <div class="form-group">
  <div class="input-group">
    {!! Form::label('document', 'Documento', ['class' => 'sr-only']) !!}
    <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-credit-card"></span></div>{!! Form::text('document', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Documento', 'title' => 'Documento' ]) !!}
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    {!! Form::label('document_type', 'Tipo de documento', ['class' => 'sr-only']) !!}
    <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-list-alt"></span></div>{!! Form::select('document_type', ['' => '--Tipo de documento--', 'T.I.' => 'Tarjeta de identidad', 'C.C.' => 'Cédula de ciudadanía', 'C.E.' => 'Cédula extránjera'], null, ['class' => 'form-control' , 'required' => 'required', 'title' => 'Tipo de documento' ])!!}
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    {!! Form::label('name', 'Nombre', ['class' => 'sr-only']) !!}
    <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-font"></span></div>{!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Nombres', 'title' => 'Nombres' ])!!}
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    {!! Form::label('last_name', 'Apellidos', ['class' => 'sr-only']) !!}
    <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-font"></span></div>{!! Form::text('last_name', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Apellidos', 'title' => 'Apellidos' ])!!}
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    {!! Form::label('email', 'Correo', ['class' => 'sr-only']) !!}
    <div class="input-group-addon" title="Correo"><span class="glyphicon glyphicon-envelope"></span></div>{!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Correo', 'title' => 'Correo' ])!!}
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    {!! Form::label('telephone', 'Teléfono', ['class' => 'sr-only']) !!}
    <div class="input-group-addon" title="Telefono"><span class="glyphicon glyphicon-earphone"></span></div>{!! Form::text('telephone', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Teléfono', 'title' => 'Teléfono' ])!!}
  </div>
</div>