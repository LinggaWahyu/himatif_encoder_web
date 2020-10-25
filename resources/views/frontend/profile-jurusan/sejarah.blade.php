@extends('frontend.layouts.app')

@section('content')
    <section class="sejarah-section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('frontend.profile-jurusan.sejarah')}}">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.profile-jurusan.kepengurusan')}}">Kepengurusan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-down" data-aos-delay="100">
                    {!! $data->sejarah !!}
                </div>
            </div>
        </div>
    </section>
@endsection
