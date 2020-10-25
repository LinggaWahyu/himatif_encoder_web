@extends('frontend.layouts.app')

@section('content')
    <section class="berita-section">
        <div class="latest-news">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <h1>Berita</h1>
                        <p>Temukan berita terkini seputar jurusan teknik informatika</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @forelse($data as $item)
                        <div
                            class="col-12 col-md-6 col-lg-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="component-news">
                                <img src="/images/news-1.jpg" class="d-block w-100"/>
                                <div class="news-title">
                                    <a href="{{route('frontend.berita.show', $item->slug)}}">{{$item->title}}</a>
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
                    @empty
                        <div class="col-12 col-md-12 col-lg-12"
                            data-aos="fade-up"
                            data-aos-delay="100">
                            <h3>Belum ada berita</h3>
                        </div>
                    @endforelse
                </div>
                <div class="row button-news justify-content-center mt-5">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                        {{$data->links()}}
                        {{--                        <div class="page-button text-center">--}}
                        {{--                            <a href="#" class="btn px-4 btn-page active"> 1 </a>--}}
                        {{--                            <a href="#" class="btn px-4 btn-page"> 2 </a>--}}
                        {{--                            <a href="#" class="btn px-4 btn-page"> 3 </a>--}}
                        {{--                            <a href="#" class="btn px-4 btn-page"> <b>></b> </a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
