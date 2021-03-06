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
                   {!! Form::model($tallasEnLetras, ['route' => ['tallasEnLetras.update', $tallasEnLetras->id], 'method' => 'patch']) !!}

                        @include('tallas_en_letras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection