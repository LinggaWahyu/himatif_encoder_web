@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pengurus
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($data, ['route' => 'profile-jurusan', 'files' => true]) !!}

                    {!! Form::hidden('id', null, ['class' => 'form-control']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::label('about', 'Tentang kami:') !!}
                        {!! Form::textarea('about', null, ['class' => 'form-control editor']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('visi', 'Visi:') !!}
                        {!! Form::textarea('visi', null, ['class' => 'form-control editor']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('misi', 'Misi:') !!}
                        {!! Form::textarea('misi', null, ['class' => 'form-control editor']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('sejarah', 'Sejarah Himpunan:') !!}
                        {!! Form::textarea('sejarah', null, ['class' => 'form-control editor']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('alamat', 'Alamat :') !!}
                        {!! Form::textarea('alamat', null, ['class' => 'form-control editor']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('contact', 'Contact:') !!}
                        {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' =>
                        '085732276465 (Adam)']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' =>
                        'bangadam.dev@gmail.com']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('video_profile', 'Video Profile Himatif:') !!}
                        {!! Form::text('video_profile', null, ['class' => 'form-control', 'placeholder' =>
                        'link video embed youtube contoh : https://www.youtube.com/embed/MfDJ91VgS-8']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('youtube_link', 'Youtube Channel Link:') !!}
                        {!! Form::text('youtube_link', null, ['class' => 'form-control', 'placeholder' =>
                        'Youtube channel link']) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
