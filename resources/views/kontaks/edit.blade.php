@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kontak
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kontak, ['route' => ['kontaks.update', $kontak->id], 'method' => 'patch']) !!}

                        @include('kontaks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection