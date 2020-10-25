@extends('frontend.layouts.app')

@section('content')
    <section class="komunitas-section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down">
                    <h1>Komunitas</h1>
                    <p>
                        Terdapat {{count($data)}} komunitas yang mewadahi mahasiswa mengembangkan
                        minat dan bakatnya
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($data as $item)
                    <div
                        class="col-12 col-md-6 col-lg-3 align-self-center"
                        data-aos="fade-down"
                        data-aos-delay="100"
                    >
                        <div class="komunitas-item">
                            <a href="{{route('frontend.komunitas.show', $item->id)}}"
                            ><img src="{{Storage::url($item->image)}}"
                                /></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
