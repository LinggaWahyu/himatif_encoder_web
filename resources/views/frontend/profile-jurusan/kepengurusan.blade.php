@extends('frontend.layouts.app')

@section('content')
    <section class="pengurus-section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down">
                    <ul class="nav nav-tabs">
                       <li class="nav-item">
                            <a class="nav-link " href="{{route('frontend.profile-jurusan.sejarah')}}">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('frontend.profile-jurusan.kepengurusan')
                            }}">Kepengurusan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profil-pengurus">
                @foreach($data as $key => $item)
                    <div class="profil-divisi" data-aos="fade-down" data-aos-delay="100">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2>{{$key}}</h2>
                            </div>
                        </div>
                            <div class="row">
                                @foreach($item as $v)
                                    <div class="col-4 col-md-3 col-lg-2 pt-2">
                                        <img src="{{Storage::url($v->photo)}}" class="d-block w-100"/>
                                        <div class="profil-title text-center">
                                            <p>{{$v->nama}}</p>
                                            <p>{{$v->jabatanPengurus->nama}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
