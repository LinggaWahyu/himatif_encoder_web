@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jabatan Pengurus
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jabatanPengurus, ['route' => ['jabatanPenguruses.update', $jabatanPengurus->id], 'method' => 'patch']) !!}

                        @include('jabatan_penguruses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection