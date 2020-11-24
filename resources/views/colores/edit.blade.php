@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Colores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($colores, ['route' => ['colores.update', $colores->id], 'method' => 'patch']) !!}

                        @include('colores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection