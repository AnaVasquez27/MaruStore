<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $facturacion->id }}</p>
</div>

<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $facturacion->id_cliente }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $facturacion->fecha }}</p>
</div>

<!-- Total A Pagar Field -->
<div class="form-group">
    {!! Form::label('total_a_pagar', 'Total A Pagar:') !!}
    <p>{{ $facturacion->total_a_pagar }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $facturacion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $facturacion->updated_at }}</p>
</div>

