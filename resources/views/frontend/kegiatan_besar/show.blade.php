@extends('frontend.layouts.app')

@section('content')
    <section class="detail-kegiatan-besar-section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down">
                    <h1>{{$data->name}}</h1>
                </div>
                <div
                    class="col-12 text-center"
                    data-aos="fade-down"
                    data-aos-delay="100"
                >
                    <img src="{{Storage::url($data->image)}}" class="kegiatan-image"/>
                </div>
                <div class="col-12" data-aos="fade-down" data-aos-delay="200">
                    <div class="kegiatan-description">
                        {!! $data->description !!}
                        <div
                            class="social-media-description"
                            data-aos="fade-down"
                            data-aos-delay="300"
                        >
                            <p>Tetap terhubung:</p>
                            <a href="{{$data->instagram_link ? $data->instagram_link : '#!'}}" target="_blank"><i
                                    class="fa
                            fa-instagram
                            icon"></i></a>
                            <a href="{{$data->facebook_link ? $data->facebook_link : '#!'}}" target="_blank"><i class="fa
                            fa-facebook icon"></i></a>
                            <a href="{{$data->youtube_link ? $data->youtube_link : '#!'}}" target="_blank"><i class="fa
                            fa-youtube
                            icon"></i></a>
                        </div>
                        <div
                            class="galeri-kegiatan"
                            data-aos="fade-down"
                            data-aos-delay="300"
                        >
                            <h5>Galeri</h5>
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        id="storeCarousel"
                                        class="carousel slide"
                                        data-ride="carousel"
                                    >
                                        <ol class="carousel-indicators">
                                            <li
                                                class="active"
                                                data-target="#storeCarousel"
                                                data-slide-to="0"
                                            ></li>
                                            <li data-target="#storeCarousel" data-slide-to="1"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach($data->galeryKomunitas->chunk(3) as $key => $item)
                                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                    <div class="row justify-content-center">
                                                        @foreach($item as $value)
                                                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                                                <img
                                                                    src="{{Storage::url($value->photo)}}"
                                                                    alt="Carousel Image"
                                                                    width="250px"
                                                                    class=""
                                                                />
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <a
                                            class="carousel-control-prev"
                                            href="#storeCarousel"
                                            role="button"
                                            data-slide="prev"
                                        >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a
                                            class="carousel-control-next"
                                            href="#storeCarousel"
                                            role="button"
                                            data-slide="next"
                                        >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
