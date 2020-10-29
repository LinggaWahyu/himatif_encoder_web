@extends('frontend.layouts.app')

@section('content')
    <section class="detail-berita-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9">
                    <div class="news-content">
                        <h1 data-aos="fade-down">
                            {{$data->title}}
                        </h1>
                        <span data-aos="fade-down" data-aos-delay="100"
                        >by HIMATIF ENCODER | {{date('d F Y', strtotime($data->created_at))}}</span
                        >
                        @if(!empty($data->thumbnail))
                            <img
                                src="{{Storage::url($data->thumbnail)}}"
                                class="image-content w-100"
                                data-aos="fade-down"
                                data-aos-delay="200"
                            />
                        @endif
                        <div data-aos="fade-down">
                            {!! $data->description !!}
                        </div>
                    </div>
                    <div class="comment-section" data-aos="fade-up">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
                <div
                    class="col-3 col-md-3 col-lg-3 latest-news-content"
                    data-aos="fade-up"
                >
                    <h2>Berita Terbaru</h2>
                    <hr/>
                    @foreach($newestBerita as $item)
                        <div
                            class="latest-news-item"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            @if(!empty($item->thumbnail))
                            <img
                                src="{{Storage::url($data->thumbnail)}}"
                                class="latest-image-content w-100"
                            />
                            @endif
                            <span>by HIMATIF ENCODER | {{date('d F Y', strtotime($item->created_at))}}</span>
                            <div class="latest-news-title">
                                {{$item->title}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
