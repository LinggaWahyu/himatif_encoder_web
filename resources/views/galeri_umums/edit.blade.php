@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Galeri Umum
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($galeriUmum, ['route' => ['galeriUmums.update', $galeriUmum->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('galeri_umums.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection