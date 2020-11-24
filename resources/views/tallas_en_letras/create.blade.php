@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tallas En Letras
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tallasEnLetras.store']) !!}

                        @include('tallas_en_letras.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
