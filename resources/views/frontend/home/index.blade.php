@extends('frontend.layouts.app')

@section('content')
    <section class="page-home">
        <div class="header" data-aos="zoom-in">
            <img src="/images/header.png" class="d-block w-100"/>
        </div>
        <div class="page-content mb-3">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 col-md-12 d-flex justify-content-center text-center"
                        data-aos="fade-down"
                    >
                        <img src="/images/himatif-color.svg" class="content-image"/>
                    </div>
                    <div class="col-lg-6 col-md-12" data-aos="fade-up">
                        <h1>Tentang Kami</h1>
                        {!! $profileJurusan->about !!}
                    </div>
                </div>
                <hr/>
                <div class="row mt-5">
                    <div
                        class="col-lg-6 col-md-12 d-flex d-lg-none justify-content-center text-center"
                        data-aos="fade-down"
                    >
                        <img src="/images/content-2.png"/>
                    </div>
                    <div class="col-lg-6 col-md-12" data-aos="fade-up">
                        <h1>Visi</h1>
                        {!! $profileJurusan->visi !!}
                    </div>
                    <div
                        class="col-lg-6 col-md-12 justify-content-center text-center"
                        data-aos="fade-down"
                    >
                        <img
                            src="/images/content-2.png"
                            class="image-content-responsive"
                        />
                    </div>
                </div>
                <hr/>
                <div class="row mt-5">
                    <div
                        class="col-lg-6 col-md-12 d-flex justify-content-center text-center"
                        data-aos="fade-down"
                    >
                        <img src="/images/content-3.jpg"/>
                    </div>
                    <div class="col-lg-6 col-md-12" data-aos="fade-up">
                        <h1>Misi</h1>
                        {!! $profileJurusan->misi !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="kiran mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-12" data-aos="zoom-out">
                        <h2>Isi Kiran Himatif untuk kritik dan saran</h2>
                    </div>
                    <div
                        class="col-lg-2 col-md-12"
                        data-aos="zoom-out"
                        data-aos-delay="200"
                    >
                        <a href="#" class="btn px-4">Isi Yuk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-news">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Berita Terkini</h1>
                        <p>Temukan berita terkini seputar jurusan teknik informatika</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($berita as $item)
                        <div
                            class="col-12 col-md-6 col-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="component-news">
                                @if(!empty($item->thumbnail))
                                    <img src="{{Storage::url($item->thumbnail)}}" class="d-block w-100"/>
                                @endif
                                <div class="news-title">
                                    <a href="{{route('frontend.berita.show', $item->slug)}}"
                                    >{{$item->title}}</a
                                    >
                                </div>
                                <div class="news-date">{{$item->createdAtDateFormat()}}</div>
                                <div class="news-content">
                                    {!! $item->descriptionCut() !!}
                                </div>
                                <a href="{{route('frontend.berita.show', $item->slug)}}" class="btn mt-4 px-4">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row button-news text-center">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                        <a
                            href="{{route('frontend.berita.index')}}"
                            class="btn px-4"
                            style="height: 48px; padding-top: 8px; font-size: 18px"
                        >
                            Berita Lainnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divisi-section">
            <div class="container-fluid">
                <div class="row">
                    <img
                        src="/images/background-divisi.jpg"
                        class="image-background d-block w-100"
                    />
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Divisi Himatif</h1>
                        <p>
                            Pengurus Himatif Encoder Tahun 2019 memiliki 58 Pengurus yang
                            terbagi dalam {{count($divisi)}} Divisi diantaranya yaitu :
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center text">
                    @foreach($divisi as $item)
                        <div
                            class="col-12 col-md-6 col-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="divisi-content">
                                <h5>
                                    {{$item->name}}
                                </h5>
                                <p>
                                    {!! $item->descriptionCut() !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="comunity-section">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Komunitas</h1>
                        <p>
                            Terdapat {{count($komunitas)}} komunitas yang mewadahi mahasiswa mengembangkan
                            minat dan bakatnya
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($komunitas as $item)
                        <div
                            class="col-6 col-md-4 col-lg-3"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="comunity-image">
                                <a href="{{route('frontend.komunitas.show', $item->id)}}">
                                    <img src="{{Storage::url($item->photo)}}" class="d-block w-100"/>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="comunity-section">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Komunitas Partner</h1>
                        <p>
                            Komunitas partner adalah komunitas luar yang menjalin kerjasama
                            dengan HIMATIF Encoder
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($partner as $item)
                        <div
                            class="col-6 col-md-4 col-lg-3"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="comunity-image">
                                <a href="{{route('frontend.komunitas.show', $item->id)}}">
                                    <img src="{{Storage::url($item->photo)}}" class="d-block w-100"/>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="gallery-section">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Galeri</h1>
                        <p>
                            Kumpulan dokumentasi kegiatan yang telah di adakan oleh HIMATIF
                            Encoder
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="gallery mt-3">
                            @foreach($gallery as $item)
                                <div class="mb-3 pics">
                                    <img
                                        class="img-fluid"
                                        src="{{Storage::url($item->photo)}}"
                                        alt="Card image cap"
                                    />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row button-news text-center">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                        <a
                            href="{{route('frontend.gallery.index')}}"
                            class="btn px-4"
                            style="height: 48px; padding-top: 8px; font-size: 18px"
                        >
                            Lebih Banyak
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-section">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Profile</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <iframe
                            data-aos="fade-up"
                            width="80%"
                            src="{{$profileJurusan->video_profile}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
