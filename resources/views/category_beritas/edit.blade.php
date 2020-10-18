@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Category Berita
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoryBerita, ['route' => ['categoryBeritas.update', $categoryBerita->id], 'method' => 'patch']) !!}

                        @include('category_beritas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection