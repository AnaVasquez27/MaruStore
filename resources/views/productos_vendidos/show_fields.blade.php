<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productosVendidos->id }}</p>
</div>

<!-- Id Factura Field -->
<div class="form-group">
    {!! Form::label('id_factura', 'Id Factura:') !!}
    <p>{{ $productosVendidos->id_factura }}</p>
</div>

<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $productosVendidos->id_producto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productosVendidos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productosVendidos->updated_at }}</p>
</div>

