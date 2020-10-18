@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Galeri Komunitas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($galeriKomunitas, ['route' => ['galeriKomunitas.update', $galeriKomunitas->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('galeri_komunitas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection