@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Facturacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($facturacion, ['route' => ['facturacions.update', $facturacion->id], 'method' => 'patch']) !!}

                        @include('facturacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection