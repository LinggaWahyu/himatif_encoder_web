@extends('frontend.layouts.app')

@section('content')
<section class="kontak-section-page">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-down">
            <h1>Kontak Kami</h1>
            <p>Isi form di bawah untuk menghubungi kami</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12 col-md-6 col-lg-6 mt-3">
              @include('flash::message')
            <form action="{{route('frontend.kontak.store')}}" method="POST">
                @csrf
              <div class="form-group" data-aos="fade-down" data-aos-delay="100">
                <input
                  type="text"
                  class="form-control"
                  name="nama_lengkap"
                  placeholder="Nama Lengkap"
                />
              </div>
              <div class="form-group" data-aos="fade-down" data-aos-delay="200">
                <input type="email" name="email" class="form-control" placeholder="Email" />
              </div>
              <div class="form-group" data-aos="fade-down" data-aos-delay="300">
                <textarea
                  rows="8"
                  name="isi"
                  class="form-control"
                  placeholder="Pesan"
                ></textarea>
              </div>
              <button
                type="submit"
                class="btn btn-block"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                KIRIM
              </button>
            </form>
          </div>
          <div
            class="col-12 col-md-6 col-lg-6 px-4 mt-3"
            data-aos="fade-down"
            data-aos-delay="100"
          >
            <img src="/images/contact-1.png" class="w-100" />
          </div>
        </div>
      </div>
    </section>
@endsection
