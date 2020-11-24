@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos De Prendas
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tiposDePrendas.store']) !!}

                        @include('tipos_de_prendas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
