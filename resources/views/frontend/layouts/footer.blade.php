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
                    <div id="googleMap" style="width: 100%; height: 210px"></div>
                </div>
            </div>
        </div>
    </div>
    <a href="about_developer.html">
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
