<!-- Id Prendas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_prendas', 'Id Prendas:') !!}
    {!! Form::text('id_prendas', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tl', 'Id Tl:') !!}
    {!! Form::text('id_tl', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prendaTls.index') }}" class="btn btn-default">Cancel</a>
</div>
