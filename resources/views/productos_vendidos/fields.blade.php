<!-- Id Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_factura', 'Id Factura:') !!}
    {!! Form::text('id_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    {!! Form::text('id_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productosVendidos.index') }}" class="btn btn-default">Cancelar</a>
</div>
