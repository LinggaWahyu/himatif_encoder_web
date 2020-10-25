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
                        >by HIMATIF ENCODER | {{date('d F Y', strtotime($data->created_at))}} | 0 comments</span
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
{{--                        <h4>1 Komentar</h4>--}}
{{--                        <div class="comment-user">--}}
{{--                            <img src="/images/comment-pic-1.png" class="comment-pic"/>--}}
{{--                            <div class="comment-title">--}}
{{--                                <b>Andy</b> Minggu, 20 Agustus 2020 14.30--}}
{{--                            </div>--}}
{{--                            <div class="comment-fill">Wah menarik sekali</div>--}}
{{--                        </div>--}}
                    </div>
{{--                    <div--}}
{{--                        class="form-comment-section"--}}
{{--                        data-aos="fade-up"--}}
{{--                        data-aos-delay="100"--}}
{{--                    >--}}
{{--                        <h3>Komentar</h3>--}}
{{--                        <form action="#">--}}
{{--                            <div class="form-group">--}}
{{--                  <textarea--}}
{{--                      rows="10"--}}
{{--                      class="form-control"--}}
{{--                      placeholder="Silahkan berkomentar"--}}
{{--                  ></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6 col-lg-4 input-form">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input--}}
{{--                                        type="text"--}}
{{--                                        class="form-control"--}}
{{--                                        placeholder="Nama"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input--}}
{{--                                        type="text"--}}
{{--                                        class="form-control"--}}
{{--                                        placeholder="Email"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <button--}}
{{--                                    type="submit"--}}
{{--                                    class="btn btn-block px-4"--}}
{{--                                    data-aos="fade-up"--}}
{{--                                    data-aos-delay="200"--}}
{{--                                >--}}
{{--                                    KIRIM--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
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
                            <span>by HIMATIF ENCODER | {{date('d F Y', strtotime($item->created_at))}} | 0
                                comments</span>
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
