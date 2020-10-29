@extends('frontend.layouts.app')

@section('content')
    <section class="about-developer-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About Developer</h1>
                </div>
                <div class="developer-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach($data as $item)
                                <div class="col-12 col-md-6 col-lg-6 pr-5">
                                    <div class="developer-item">
                                        <img
                                            src="{{Storage::url($item->photo)}}"
                                            alt="{{$item->name}}"
                                            class="d-block w-100"
                                        />
                                        <h5>{{$item->name}}</h5>
                                        <p>{{$item->role}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
