<!-- Id Prendas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_prendas', 'Id Prendas:') !!}
    {!! Form::select('id_prendas', $tipos_de_prendas, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_color', 'Id Color:') !!}
    {!! Form::select('id_color',$colores, null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_unitario', 'Precio Unitario:') !!}
    {!! Form::text('precio_unitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Existencias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('existencias', 'Existencias:') !!}
    {!! Form::text('existencias', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">Cancelar</a>
</div>
