@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tallas En Numeros
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tallasEnNumeros, ['route' => ['tallasEnNumeros.update', $tallasEnNumeros->id], 'method' => 'patch']) !!}

                        @include('tallas_en_numeros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection