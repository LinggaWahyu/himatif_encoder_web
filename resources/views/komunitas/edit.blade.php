@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Komunitas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($komunitas, ['route' => ['komunitas.update', $komunitas->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('komunitas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection