@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prenda Tl
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'prendaTls.store']) !!}

                        @include('prenda_tls.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
