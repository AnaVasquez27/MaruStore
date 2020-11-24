<!-- Id Prendas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_prendas', 'Id Prendas:') !!}
    {!! Form::text('id_prendas', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tn', 'Id Tn:') !!}
    {!! Form::text('id_tn', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prendaTns.index') }}" class="btn btn-default">Cancel</a>
</div>
