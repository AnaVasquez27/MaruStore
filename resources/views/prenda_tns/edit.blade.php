@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prenda Tn
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prendaTn, ['route' => ['prendaTns.update', $prendaTn->id], 'method' => 'patch']) !!}

                        @include('prenda_tns.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection