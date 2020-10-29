<!-- Footer -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg-4">
                    <h1>Hubungi kami</h1>
                    <div class="footer-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <p style="color:white;">
                        {!! $himatif->alamat !!}
                    </p>
                    <i class="fa fa-phone icon"></i>
                    <p>{{ $himatif->contact }}</p>
                    <i class="fa fa-envelope icon"></i>
                    <p>{{$himatif->email}}</p>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="social-media">
                        <h1>Sosial Media</h1>
                        <i class="fa fa-instagram icon"></i>
                        <a
                            href="https://www.instagram.com/himatif.encoder/"
                            target="_blank"
                        ><p>@himatif_encoders</p></a
                        >
                        <i class="fa fa-facebook icon" style="margin-right: 35px"></i>
                        <a
                            href="https://www.facebook.com/himatif.encoder"
                            target="_blank"
                        ><p>Himatif Encoder</p></a
                        >
                        <i class="fa fa-youtube icon"></i>
                        <a
                            href="https://www.youtube.com/channel/UCdZ5E8byWYwMG-3CIvJ_tIA"
                            target="_blank"
                        ><p>Himatif Encoder</p></a
                        >
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <h1>Peta</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d855.8111872183301!2d112.60715346935523!3d-7.9525704922400955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe3f5aa1b4bf5cfb!2sHimatif%20Encoder!5e0!3m2!1sid!2sid!4v1603813780658!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('frontend.developer.index')}}">
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="pt-4 pb-2">
                            © 2020 Himatif Encoder. All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</footer>

@include('frontend.layouts.js')
