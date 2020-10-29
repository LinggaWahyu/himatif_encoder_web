@extends('frontend.layouts.app')

@section('content')
    <section class="gallery-section-page">
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
            <div class="row mt-3">
                <div class="col-12">
                    <div class="gallery mt-3">
                        @foreach($data as $item)
                            <div class="mb-3 pics" data-aos="fade-down" data-aos-delay="100">
                                <img
                                    class="img-fluid"
                                    src="{{Storage::url($item->photo)}}"
                                    alt="{{$item->title}}"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                {{$data->links()}}
            </div>
        </div>
    </section>
@endsection
