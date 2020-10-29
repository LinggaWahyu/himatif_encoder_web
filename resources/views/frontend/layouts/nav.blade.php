<nav
    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
    data-aos="fade-down"
>
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="/images/himatif-color.svg" alt="Logo"/>
            <span class="navbar-title">Himatif Encoder</span>
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        id="navbardrop"
                        data-toggle="dropdown"
                    >Tentang Kami</a
                    >
                    <div class="dropdown-menu">
                        <a href="{{route('frontend.kegiatan-besar.index')}}" class="dropdown-item"
                        >Kegiatan Besar</a>
                        <a href="{{route('frontend.komunitas.index')}}" class="dropdown-item">Komunitas</a>
                        <a href="{{route('frontend.profile-jurusan.sejarah')}}" class="dropdown-item"
                        >Profile HIMATIF</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('frontend.berita.index')}}" class="nav-link">Berita</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('frontend.gallery.index')}}" class="nav-link">Galeri</a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{$himatif->youtube_link}}"
                        target="_blank"
                        class="nav-link"
                    >Youtube</a
                    >
                </li>
                <li class="nav-item">
                    <a href="{{route('frontend.kontak.index')}}" class="nav-link">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
