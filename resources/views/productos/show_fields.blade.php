<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productos->id }}</p>
</div>

<!-- Id Prendas Field -->
<div class="form-group">
    {!! Form::label('id_prendas', 'Id Prendas:') !!}
    <p>{{ $productos->id_prendas }}</p>
</div>

<!-- Id Color Field -->
<div class="form-group">
    {!! Form::label('id_color', 'Id Color:') !!}
    <p>{{ $productos->id_color }}</p>
</div>

<!-- Precio Unitario Field -->
<div class="form-group">
    {!! Form::label('precio_unitario', 'Precio Unitario:') !!}
    <p>{{ $productos->precio_unitario }}</p>
</div>

<!-- Existencias Field -->
<div class="form-group">
    {!! Form::label('existencias', 'Existencias:') !!}
    <p>{{ $productos->existencias }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

